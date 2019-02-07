<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComputerFormRequest;
use App\Computer;
use App\User;

class ComputersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $computers = Computer::orderBy('compName')->get();

        return view('computers.index', compact('computers'));
    }

    public function create()
    {
        $this->authorize('create', Computer::class);

        return view('computers.create');
    }

    public function store(ComputerFormRequest $request)
    {
        $request->validate([
            'compName' => 'unique:computers',
        ]);

        Computer::create([
            'compName' => $request->get('compName'),
            'os' => $request->get('os'),
            'status' => $request->get('status'),
            'information' => $request->get('information'),
        ]);

        return redirect('/computers')->with('status', 'Computer record successfully added.');
    }

    public function show(Computer $computer)
    {
        return view('computers.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {   
        $this->authorize('update', $computer);

        return view('computers.edit', compact('computer'));
    }

    public function update(ComputerFormRequest $request, Computer $computer)
    {
        $computer->update([
            'compName' => $request->get('compName'),
            'os' => $request->get('os'),
            'status' => $request->get('status'),
            'information' => $request->get('information'),
        ]);

        return redirect("/computer/$computer->id")
            ->with('status', 'Computer record successfully updated.');
    }
   
}
