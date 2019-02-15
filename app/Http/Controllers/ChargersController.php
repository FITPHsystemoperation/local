<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Charger;

class ChargersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Computer $computer)
    {
        return view('computers.charger', compact('computer'))
            ->with('chargers', Charger::all());
    }

    public function store(Request $request)
    {
        $request->validate([ 'chargerName' => 'required|min:5|unique:chargers', ]);

        Charger::create(['chargerName' => $request->get('chargerName')]);

        return redirect()->back()
            ->with('status', 'Charger successfully recorded');
    }

    public function attach(Request $request, Computer $computer)
    {
        $request->validate([ 'charger' => 'required' ]);
        
        $charger = Charger::findOrFail($request->get('charger'));
        
        $computer->chargers()->save($charger);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', "Charger:<strong>$charger->chargerName</strong> has been attached to this computer");
    }

    public function detach(Computer $computer, Charger $charger)
    {
        $charger->update(['computer_id' => null]);

        return redirect()->back()
            ->with('status', "Charger:<strong>$charger->chargerName</strong> has been detached from this computer");
    }
}
