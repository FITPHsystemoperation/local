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
        $this->authorize('create', Department::class);

        return view('departments.create');
    }

    public function store(DepartmentFormRequest $request)
    {
        $this->authorize('create', Department::class);

        $request->validate(['departmentName' => 'unique:departments']);

        $department = Department::create(['departmentName' => $request->get('departmentName')]);

        return redirect()->route('departments.index')
            ->with('status', "Department:<strong>$department->departmentName</strong> successfully recorded");
    }

    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        $this->authorize('update', $department);

        return view('departments.edit', compact('department'));
    }

    public function update(DepartmentFormRequest $request, Department $department)
    {
        $this->authorize('update', $department);
        
        $department->update(['departmentName' => $request->get('departmentName')]);

        return redirect()->route('departments.show', $department->id)
            ->with('status', 'Department successfully updated');
    }

    public function destroy($id)
    {
        abort(403);
    }
}
