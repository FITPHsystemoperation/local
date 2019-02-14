<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Http\Requests\DepartmentFormRequest;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('departments.index')->with('departments', Department::all());
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(DepartmentFormRequest $request)
    {
        $request->validate(['departmentName' => 'unique:departments']);

        Department::create(['departmentName' => $request->get('departmentName')]);

        return redirect()->route('departments.index')
            ->with('status', 'Department successfully recorded');
    }

    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(DepartmentFormRequest $request, Department $department)
    {
        $department->update(['departmentName' => $request->get('departmentName')]);

        return redirect()->route('departments.show', $department->id)
            ->with('status', 'Record successfully updated');
    }

    public function destroy($id)
    {
        abort(403);
    }
}
