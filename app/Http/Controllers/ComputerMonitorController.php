<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;

class ComputerMonitorController extends Controller
{
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
        $monitor = Monitor::whereId($request->get('monitor_id'))
            ->firstOrFail();

        $monitor->computer_id = $computer_id;

        $monitor->save();

        return redirect(action('ComputersController@show', $computer_id))
            ->with('status', 'Monitor has been added to this computer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer_id)
    {
        Monitor::where('computer_id', $computer_id)
            ->update(array('computer_id' => null));

        return redirect(action('ComputersController@show', $computer_id)) 
            ->with('status', 'Monitor has been removed from this computer');
    }
}
