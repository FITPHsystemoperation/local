<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();

        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffNameFormRequest $request)
    {
        Staff::create([
            'idNumber' => $request->get('idNumber'),
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'nickName' => $request->get('nickName'),
            'gender' => $request->get('gender'),
            'image' => $request->get('gender') === 'm' ? 'male.jpg' : 'female.jpg',
        ]);

        return redirect('/staffs')
            ->with('status', 'Staff successfully recorded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {   
        return view('staffs.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staffs.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaffNameFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'idNumber' => $request->get('idNumber'),
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'nickName' => $request->get('nickName'),
            'gender' => $request->get('gender'),
        ]);

        if ($request->hasFile('image'))
        {
            $filename = $staff->idNumber . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->storeAs('public/staffs', $filename);

            $staff->update([
                'image' => $filename,
            ]);
        }

        return redirect("/staff/$staff->id")
            ->with('status', 'Staff record successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect('/staffs')
            ->with('status', "$staff->idNumber successfully removed from the record");
    }

    public function editWorkingData(Staff $staff)
    {
        return view('staffs.workingData')
            ->with('staff', $staff)
            ->with('stats', \App\EmploymentStat::all())
            ->with('titles', \App\JobTitle::all())
            ->with('departments', \App\Department::all());
    }

    public function updateWorkingData(StaffWorkFormRequest $request, Staff $staff)
    {
        $staff->update([
            'dateHired' => $request->get('dateHired'),
            'employment_stat_id' => $request->get('employment_stat_id'),
            'job_title_id' => $request->get('job_title_id'),
            'department_id' => $request->get('department_id'),
            'dailyRate' => $request->get('dailyRate'),
        ]);

        return $staff->isCompleted ? 
            redirect("/staff/$staff->id")
                ->with('status', "Working data successfully updated"):
            redirect("/staff/$staff->id/contact-information");
    }

    public function editContactInfo(Staff $staff)
    {
        return view('staffs.contactInfo')->with('staff', $staff);
    }

    public function updateContactInfo(StaffContactFormRequest $request, Staff $staff)
    {
        $staff->update([
            'contactNo' => $request->get('contactNo'),
            'emailAddress' => $request->get('emailAddress'),
            'permanentAddress' => $request->get('permanentAddress'),
            'presentAddress' => $request->get('presentAddress'),
        ]);

        return $staff->isCompleted ? 
            redirect("/staff/$staff->id")
                ->with('status', "Contact Information successfully updated"):
            redirect("/staff/$staff->id/emergency");
    }

    public function editEmergency(Staff $staff)
    {
        return view('staffs.emergency')->with('staff', $staff);
    }

    public function updateEmergency(StaffEmergencyFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'emergencyPerson' => $request->get('emergencyPerson'),
            'emergencyNo' => $request->get('emergencyNo'),
            'emergencyRelation' => $request->get('emergencyRelation'),
        ]);

        return $staff->isCompleted ? 
            redirect("/staff/$staff->id")
                ->with('status', "Emergency Contact Information successfully updated"):
            redirect("/staff/$staff->id/account");
    }

    public function editAccount(Staff $staff)
    {
        return view('staffs.account')->with('staff', $staff);
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

        return $staff->isCompleted ? 
            redirect("/staff/$staff->id")
                ->with('status', "Account Information successfully updated"):
            redirect("/staff/$staff->id/personal");
    }

    public function editPersonal(Staff $staff)
    {
        return view('staffs.personal')->with('staff', $staff);
    }

    public function updatePersonal(StaffPersonalFormRequest $request, Staff $staff)
    {   
        $staff->update([
            'birthday' => $request->get('birthday'),
            'civilStatus' => $request->get('civilStatus'),
            'isCompleted' => 1  
        ]);

        if ( $staff->isCompleted )
        {
            return redirect("/staff/$staff->id")
                ->with('status', "Personal Information successfully updated");
        }
        else
        {
            $staff->update(['isCompleted' => 1]);
            return redirect("/staff/$staff->id")
                ->with('status', "Information successfully updated");
        }
    }
}
