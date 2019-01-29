<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Software;
use App\Http\Requests\SoftwareFormRequest;

class SoftwaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $softwares = Software::all();

        return view('softwares.index', compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('softwares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SoftwareFormRequest $request)
    {   
        $request->validate(['softwareName' => 'unique:software']);

        Software::create([
            'softwareName' => $request->get('softwareName'),
            'specList' => json_encode(explode(' ', $request['specList'])),
        ]);

        return redirect('/softwares')->with('status', 'Software successfully recorded');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Software $software)
    {
        return view('softwares.show', compact('software'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Software $software)
    {
       return view('softwares.edit', compact('software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SoftwareFormRequest $request, Software $software)
    {
        $software->update([
            'softwareName' => $request->get('softwareName'),
            'specList' => json_encode(explode(' ', $request['specList'])),
        ]);

        return redirect('/softwares')->with('status', "$software->softwareName successfully updated");  
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
