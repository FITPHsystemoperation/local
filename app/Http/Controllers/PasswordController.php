<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordFormRequest;
use App\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('password.index')->with('passwords', Password::all());
    }

    public function create()
    {
        return view('password.create');
    }

    public function store(PasswordFormRequest $request)
    {
        $request->validate(['subject' => 'unique:passwords']);

        $password = Password::create([
            'subject' => $request->get('subject'),
            'password' => $request->get('password'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('passwords.index')
            ->with('status', "Subject:<strong>$password->subject</strong> successfully recorded");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
