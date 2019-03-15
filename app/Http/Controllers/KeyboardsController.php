<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Keyboard;

class KeyboardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Computer $computer)
    {
        $this->authorize('create', Keyboard::class);

        return view('computers.keyboard', compact('computer'))
            ->with('keyboards', Keyboard::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Keyboard::class);

        $request->validate([ 'keyboardName' => 'required|min:5|unique:keyboards', ]);

        Keyboard::create(['keyboardName' => $request->get('keyboardName')]);

        return redirect()->back()
            ->with('status', 'Keyboard successfully recorded'); 
    }

    public function attach(Request $request, Computer $computer)
    {
        $this->authorize('create', Keyboard::class);

        $request->validate([ 'keyboard' => 'required' ]);
        
        $keyboard = Keyboard::findOrFail($request->get('keyboard'));
        
        $computer->keyboards()->save($keyboard);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', "Keyboard:<strong>$keyboard->keyboardName</strong> has been attached to this computer");
    }

    public function detach(Computer $computer, Keyboard $keyboard)
    {
        $this->authorize('update', $keyboard);

        $keyboard->update(['computer_id' => null]);

        return redirect()->back()
            ->with('status', "Keyboard:<strong>$keyboard->keyboardName</strong> has been detached from this computer");
    }
}
