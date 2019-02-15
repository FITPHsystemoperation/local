<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Software;
use App\ComputerSoftware;

class ComputerSoftwareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Computer $computer)
    {
        $this->authorize('create', ComputerSoftware::class);

        return view('computers.software.index')
            ->with('softwares', Software::all())
            ->with('computer', $computer);
    }

    public function create(Computer $computer, Software $software)
    {   
        $this->authorize('create', ComputerSoftware::class);

        return view('computers.software.create')
            ->with('softwares', Software::all())
            ->with('software', $software)
            ->with('computer', $computer);
    }

    public function store(Request $request, Computer $computer, Software $software)
    {
        ComputerSoftware::create([
            'computer_id' => $computer->id,
            'software_id' => $software->id,
            'specs' => array_slice($request->all(), 1),
        ]);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', 'Software successfully added to this computer');
    }

    public function edit(Computer $computer, ComputerSoftware $computer_software)
    {
        $this->authorize('create', ComputerSoftware::class);
     
        return view('computers.software.edit', compact('computer_software')); 
    }

    public function update(Request $request, Computer $computer, ComputerSoftware $computer_software)
    {
        $computer_software->update([
            'specs' => array_slice($request->all(), 2),
        ]);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', 'Software details successfully updated');
    }

    public function destroy(Computer $computer, ComputerSoftware $computer_software)
    {
        $computer_software->delete();

        return redirect()->route('computers.show', $computer->id)
            ->with('status', 'Software successfully removed');
    }
}
