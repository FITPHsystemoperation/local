<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyboard;

class ComputerKeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $keyboards = Keyboard::all();

        return view('computers.keyboard', compact('keyboards', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $computer_id)
    {
        $keyboard = Keyboard::whereId($request->get('keyboard_id'))
            ->firstOrFail();

        $keyboard->computer_id = $computer_id;

        $keyboard->save();

        return redirect(action('ComputersController@show', $computer_id))
            ->with('status', 'Keyboard has been added to this computer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer_id, $id)
    {
        $keyboard = Keyboard::whereId($id)->firstOrFail();

        $keyboard->computer_id = null;

        $keyboard->save();

        return redirect()
            ->back() 
            ->with('status', 'Keyboard has been removed from this computer');
    }
}
