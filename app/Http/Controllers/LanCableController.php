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
            'name' => 'required|min:10'
        ]);
        dd($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
