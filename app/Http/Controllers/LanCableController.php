<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LanCable;

class LanCableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('lan-cable.index')
            ->with('cables', LanCable::all());
    }

    public function create()
    {
        return view('lan-cable.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:lan_cables',
            'description' => 'required|min:3',
        ]);

        $cable = LanCable::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('cables.index')
            ->with('status', "LAN:<strong>$cable->name</strong> successfully recorded!");
    }

    public function show($id)
    {
        abort(404);
    }

    public function edit(LanCable $cable)
    {
        return view('lan-cable.edit', compact('cable'));
    }

    public function update(Request $request, LanCable $cable)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $cable->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('cables.index')
            ->with('status', "LAN:<strong>$cable->name</strong> successfully updated!");
    }

    public function destroy($id)
    {
        abort(403);
    }
}
