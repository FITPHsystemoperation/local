<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mouse;

class ComputerMouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $mouses = Mouse::all();

        return view('computers.mouse', compact('mouses', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $computer_id)
    {
        $mouse = Mouse::whereId($request->get('mouse_id'))
            ->firstOrFail();

        $mouse->computer_id = $computer_id;

        $mouse->save();

        return redirect(action('ComputersController@show', $computer_id))
            ->with('status', 'Mouse has been add to this computer');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy($computer_id)
    {
        Mouse::where('computer_id', $computer_id)
            ->update(array('computer_id' => null));

        return redirect(action('ComputersController@show', $computer_id)) 
            ->with('status', 'Mouse has been removed from this computer');
    }

}
