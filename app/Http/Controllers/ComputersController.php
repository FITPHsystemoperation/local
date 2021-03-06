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
        return view('computers.index')
            ->with('computers', Computer::orderBy('compName')->get());
    }

    public function create()
    {
        $this->authorize('create', Computer::class);

        return view('computers.create');
    }

    public function store(ComputerFormRequest $request)
    {
        $this->authorize('create', Computer::class);

        $request->validate([
            'compName' => 'unique:computers',
        ]);

        $computer = Computer::create([
            'compName' => $request->get('compName'),
            'os' => $request->get('os'),
            'status' => $request->get('status'),
            'information' => $request->get('information'),
        ]);

        return redirect()->route('computers.index')
            ->with('status', "Computer:<strong>$computer->compName</strong> successfully recorded");
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
        $this->authorize('update', $computer);
        
        $computer->update([
            'compName' => $request->get('compName'),
            'os' => $request->get('os'),
            'status' => $request->get('status'),
            'information' => $request->get('information'),
        ]);

        return redirect()->route('computers.show', $computer->id    )
            ->with('status', 'Computer information successfully updated');
    }

    public function destroy()
    {
        abort(403);
    }
}
