<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Http\Requests\StaffFormRequest;

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
    public function store(StaffFormRequest $request)
    {
        Staff::create([
            'idNumber' => $request->get('idNumber'),
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'nickName' => $request->get('nickName'),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender'),
            'image' => $request->get('gender') === 'm' ? 'male.jpg' : 'female.jpg',
        ]);

        return redirect('/staffs')->with('status', 'Staff successfully recorded.');
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
    public function update(StaffFormRequest $request, Staff $staff)
    {
        $staff->update([
            'idNumber' => $request->get('idNumber'),
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'nickName' => $request->get('nickName'),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender'),
            'image' => $request->get('gender') === 'm' ? 'male.jpg' : 'female.jpg',
        ]);

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

        return redirect('/staffs')->with('status', "$staff->idNumber successfully removed from the record");
    }
}
