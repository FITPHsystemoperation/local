<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Mouse;

class MousesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index(Computer $computer)
    {
        return view('computers.mouse', compact('computer'))
            ->with('mouses', Mouse::all());
    }

    public function store(Request $request)
    {
        $request->validate([ 'mouseName' => 'required|min:5|unique:mouses' ]);

        Mouse::create(['mouseName' => $request->get('mouseName')]);

        return redirect()->back()
            ->with('status', 'Mouse successfully recorded'); 
    }

    public function attach(Request $request, Computer $computer)
    {
        $request->validate([ 'mouse_id' => 'required' ]);
        
        $mouse = Mouse::findOrFail($request->get('mouse_id'));
        
        $computer->mouses()->save($mouse);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', 'Mouse has been attached to this computer');
    }

    public function detach(Computer $computer, Mouse $mouse)
    {
        $mouse->update(['computer_id' => null]);

        return redirect()->back()
            ->with('status', 'Mouse has been detached from this computer');
    }
}
