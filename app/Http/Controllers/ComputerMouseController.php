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
        Mouse::whereId($request->get('mouse_id'))->firstOrFail()
            ->update(['computer_id' => $computer_id]);

        return redirect("/computer/$computer_id")
            ->with('status', 'Mouse has been added to this computer');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy($id)
    {
        $mouse = Mouse::whereId($id)->firstOrFail()
            ->update(['computer_id' => null]);

        return redirect()->back() 
            ->with('status', 'Mouse has been removed from this computer');
    }

}
