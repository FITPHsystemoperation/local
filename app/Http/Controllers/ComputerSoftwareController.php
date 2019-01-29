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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Computer $computer)
    {
        return view('computers.software.index')
            ->with('softwares', Software::all())
            ->with('computer', $computer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Computer $computer, Software $software)
    {   
        return view('computers.software.create')
            ->with('softwares', Software::all())
            ->with('software', $software)
            ->with('computer', $computer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ComputerSoftware $computer_software)
    {
        return view('computers.software.edit', compact('computer_software')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComputerSoftware $computer_software)
    {
        $computer_software->update([
            'specs' => array_slice($request->all(), 1),
        ]);

        return redirect("/computer/$computer_software->computer_id")
            ->with('status', 'Software details successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
