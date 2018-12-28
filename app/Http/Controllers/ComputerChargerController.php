<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charger;

class ComputerChargerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $chargers = Charger::all();

        return view('computers.charger', compact('chargers', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $computer_id)
    {
        $charger = Charger::whereId($request->get('charger_id'))
            ->firstOrFail();

        $charger->computer_id = $computer_id;

        $charger->save();

        return redirect(action('ComputersController@show', $computer_id))
            ->with('status', 'Charger has been added to this computer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer_id)
    {
        Charger::where('computer_id', $computer_id)
            ->update(array('computer_id' => null));

        return redirect(action('ComputersController@show', $computer_id)) 
            ->with('status', 'Charger has been removed from this computer');
    }
}
