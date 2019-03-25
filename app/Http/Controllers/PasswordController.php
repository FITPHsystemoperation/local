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

    public function show(Password $password)
    {
        abort(404);
    }

    public function edit(Password $password)
    {
        return view('password.edit', compact('password'));
    }

    public function update(PasswordFormRequest $request, Password $password)
    {
        $password->update([
            'subject' => $request->get('subject'),
            'password' => $request->get('password'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('passwords.index')
            ->with('status', "Subject:<strong>$password->subject</strong> successfully updated");
    }

    public function destroy($id)
    {
        abort(403);
    }
}
