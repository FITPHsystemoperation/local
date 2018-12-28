<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComputerFormRequest;
use App\Computer;

class ComputersController extends Controller
{
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

        $computer = new Computer([
            'compName' => $request->get('compName'),
            'adminPass' => $request->get('adminPass'),
            'userName' => $request->get('userName'),
            'userPass' => $request->get('userPass'),
            'specs' => $request->get('specs'),
            'withWbuster' => $request->has('withWbuster') ? 1 : 0,
            'withSkysea' => $request->has('withSkysea') ? 1 : 0,
        ]);

        $computer->save();

        return redirect('/computers')->with('status', 'Computer record successfully added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computer = Computer::whereId($id)->firstOrFail();

        $mouse = $computer->mouse()->get()->first();

        return view('computers.show', compact('computer', 'mouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computer = Computer::whereId($id)->firstOrFail();

        return view('computers.edit', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComputerFormRequest $request, $id)
    {
        $computer = Computer::whereId($id)->firstOrFail();

        $computer->compName = $request->get('compName');
        $computer->userName = $request->get('userName');
        $computer->userPass = $request->get('userPass');
        $computer->userPass = $request->get('userPass');
        $computer->adminPass = $request->get('adminPass');
        $computer->specs = $request->get('specs');
        $computer->withWbuster = $request->has('withWbuster') ? 1 : 0;
        $computer->withSkysea = $request->has('withSkysea') ? 1 : 0;

        $computer->save();

        return redirect(action('ComputersController@show', $computer->id))
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
