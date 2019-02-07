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

    public function store(Request $request, $computer, $software)
    {
        ComputerSoftware::create([
            'computer_id' => $computer,
            'software_id' => $software,
            'specs' => array_slice($request->all(), 1),
        ]);

        return redirect("/computer/$computer")
            ->with('status', 'Software successfully added to this computer');
    }

    public function edit(ComputerSoftware $computer_software)
    {
        $this->authorize('create', ComputerSoftware::class);
     
        return view('computers.software.edit', compact('computer_software')); 
    }

    public function update(Request $request, ComputerSoftware $computer_software)
    {
        $computer_software->update([
            'specs' => array_slice($request->all(), 1),
        ]);

        return redirect("/computer/$computer_software->computer_id")
            ->with('status', 'Software details successfully updated');
    }

}
