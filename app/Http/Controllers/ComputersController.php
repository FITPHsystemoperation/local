<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComputerFormRequest;
use App\Computer;

class ComputersController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::orderBy('compName')->get();

        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComputerFormRequest $request)
    {
        Computer::create([
            'compName' => $request->get('compName'),
            'adminPass' => $request->get('adminPass'),
            'userName' => $request->get('userName'),
            'userPass' => $request->get('userPass'),
            'specs' => $request->get('specs'),
            'withWbuster' => $request->has('withWbuster') ? 1 : 0,
            'withSkysea' => $request->has('withSkysea') ? 1 : 0,
        ]);

        return redirect('/computers')->with('status', 'Computer record successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        return view('computers.show', compact('computer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        return view('computers.edit', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComputerFormRequest $request, Computer $computer)
    {
        $computer->update([
            'compName' => $request->get('compName'),
            'adminPass' => $request->get('adminPass'),
            'userName' => $request->get('userName'),
            'userPass' => $request->get('userPass'),
            'specs' => $request->get('specs'),
            'withWbuster' => $request->has('withWbuster') ? 1 : 0,
            'withSkysea' => $request->has('withSkysea') ? 1 : 0,
        ]);

        return redirect("/computer/$computer->id")
            ->with('status', 'Computer record successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
