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
        $this->authorize('create', Mouse::class);

        return view('computers.mouse', compact('computer'))
            ->with('mouses', Mouse::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Mouse::class);

        $request->validate([ 'mouseName' => 'required|min:5|unique:mouses' ]);

        Mouse::create(['mouseName' => $request->get('mouseName')]);

        return redirect()->back()
            ->with('status', 'Mouse successfully recorded'); 
    }

    public function attach(Request $request, Computer $computer)
    {
        $this->authorize('create', Mouse::class);

        $request->validate([ 'mouse' => 'required' ]);
        
        $mouse = Mouse::findOrFail($request->get('mouse'));
        
        $computer->mouses()->save($mouse);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', "Mouse:<strong>$mouse->mouseName</strong> has been attached to this computer");
    }

    public function detach(Computer $computer, Mouse $mouse)
    {
        $this->authorize('update', $mouse);

        $mouse->update(['computer_id' => null]);

        return redirect()->back()
            ->with('status', "Mouse:<strong>$mouse->mouseName</strong> has been detached from this computer");
    }
}
