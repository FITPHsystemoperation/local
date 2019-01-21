<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;

class ComputerMonitorController extends Controller
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
    public function index($id)
    {
        $monitors = Monitor::all();

        return view('computers.monitor', compact('monitors', 'id'));
    }

    public function store(Request $request, $computer_id)
    {
        Monitor::whereId($request->get('monitor_id'))->firstOrFail()
            ->update(['computer_id' => $computer_id]);

        return redirect("/computer/$computer_id")
            ->with('status', 'Monitor has been added to this computer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Monitor::whereId($id)->firstOrFail()
            ->update(['computer_id' => null]);

        return redirect()->back() 
            ->with('status', 'Monitor has been removed from this computer');
    }
}
