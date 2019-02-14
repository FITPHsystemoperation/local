<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\{Staff, JobTitle, Department};
use App\Http\Requests\{
    StaffNameFormRequest,
    StaffWorkFormRequest,
    StaffContactFormRequest,
    StaffEmergencyFormRequest,
    StaffAccountFormRequest,
    StaffPersonalFormRequest
};

class StaffsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('staffs.index')->with('staffs', Staff::all());
    }

    public function create()
    {
        return view('staffs.create');
    }

    public function store(StaffNameFormRequest $request)
    {
        $request->validate(['idNumber' => 'unique:users']);
        
        Staff::create([
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'nickName' => $request->get('nickName'),
            'gender' => $request->get('gender'),
            'image' => $request->get('gender') === 'm' ? 'male.jpg' : 'female.jpg',
        ])->user()->create([
            'idNumber' => $request->get('idNumber'),
            'password' => Hash::make('123456'),
        ]); 

        return redirect()->route('staffs.index')
            ->with('status', 'Staff successfully recorded');
    }

    public function show(Staff $staff)
    {   
        return view('staffs.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staffs.edit', compact('staff'));
    }

    public function update(StaffNameFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'nickName' => $request->get('nickName'),
        ]);

        $staff->user()->update([
            'idNumber' => $request->get('idNumber'),
        ]);

        $this->uploadImage($request->file('image'), $staff);

        return redirect()->route('staffs.show', $staff->id)
            ->with('status', 'Staff record successfully updated');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staffs.index')
            ->with('status', "$staff->firstName $staff->firstName successfully removed from the record");
    }

    public function editWork(Staff $staff)
    {
        return view('staffs.work')
            ->with('staff', $staff)
            ->with('stats', \App\EmploymentStat::all())
            ->with('titles', \App\JobTitle::all())
            ->with('departments', \App\Department::all());
    }

    public function updateWork(StaffWorkFormRequest $request, Staff $staff)
    {
        $staff->update([
            'dateHired' => $request->get('dateHired'),
            'employment_stat_id' => $request->get('employment_stat_id'),
            'job_title_id' => $request->get('job_title_id'),
            'department_id' => $request->get('department_id'),
            'dailyRate' => $request->get('dailyRate'),
        ]);

        return !$staff->isCompleted ? 
            redirect()->route('staffs.contact.edit', $staff->id):
            redirect()->route('staffs.show', $staff->id)
                ->with('status', "Working data successfully updated");
    }

    public function editContact(Staff $staff)
    {
        return view('staffs.contact', compact('staff'));
    }

    public function updateContact(StaffContactFormRequest $request, Staff $staff)
    {
        $staff->update([
            'contactNo' => $request->get('contactNo'),
            'emailAddress' => $request->get('emailAddress'),
            'permanentAddress' => $request->get('permanentAddress'),
            'presentAddress' => $request->get('presentAddress'),
        ]);

        return !$staff->isCompleted ? 
            redirect()->route('staffs.emergency.edit', $staff->id):
            redirect()->route('staffs.show', $staff->id)
                ->with('status', "Contact Information successfully updated");
    }

    public function editEmergency(Staff $staff)
    {
        return view('staffs.emergency', compact('staff'));
    }

    public function updateEmergency(StaffEmergencyFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'emergencyPerson' => $request->get('emergencyPerson'),
            'emergencyNo' => $request->get('emergencyNo'),
            'emergencyRelation' => $request->get('emergencyRelation'),
        ]);

        return !$staff->isCompleted ? 
            redirect()->route('staffs.account.edit', $staff->id):
            redirect()->route('staffs.show', $staff->id)
                ->with('status', "Emergency Contact Information successfully updated");
    }

    public function editAccount(Staff $staff)
    {
        return view('staffs.account', compact('staff'));
    }

    public function updateAccount(StaffAccountFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'birNo' => $request->get('birNo'),
            'sssNo' => $request->get('sssNo'),
            'pagibigNo' => $request->get('pagibigNo'),
            'philhealthNo' => $request->get('philhealthNo'),
            'bankNo' => $request->get('bankNo'),
        ]);

        return !$staff->isCompleted ? 
            redirect()->route('staffs.personal.edit', $staff->id):
            redirect()->route('staffs.show', $staff->id)
                ->with('status', "Account Information successfully updated");
    }

    public function editPersonal(Staff $staff)
    {
        return view('staffs.personal', compact('staff'));
    }

    public function updatePersonal(StaffPersonalFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'birthday' => $request->get('birthday'),
            'civilStatus' => $request->get('civilStatus'),
            'gender' => $request->get('gender'),
            'isCompleted' => 1  
        ]);

        return redirect()->route('staffs.show', $staff->id)
            ->with('status', "Information successfully updated");
    }

    protected function uploadImage($image, $staff)
    {
        if ($image)
        {
            $filename = $staff->user->idNumber . '_' . time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/staffs', $filename);

            $staff->update([
                'image' => $filename,
            ]);
        }
    }
}
