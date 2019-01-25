<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComputerAccount;
use App\Http\Requests\ComputerAccountFormRequest;

class ComputerAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('computers.account.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComputerAccountFormRequest $request, $id)
    {
        ComputerAccount::create([
            'computer_id' => $id,
            'accountName' => $request->get('accountName'),
            'accountRole' => $request->get('accountRole'),
            'password' => $request->get('password'),
        ]);

        return redirect("/computer/$id")
            ->with('status', 'Account has been added to this computer');
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
    public function edit(ComputerAccount $account)
    {
        return view('computers.account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComputerAccountFormRequest $request, ComputerAccount $account)
    {
        $account->update([
            'accountName' => $request->get('accountName'),
            'accountRole' => $request->get('accountRole'),
            'password' => $request->get('password'),
        ]);

        return redirect("/computer/$account->computer_id")
            ->with('status', 'Account has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComputerAccount $account)
    {
        $account->delete();

        return redirect("/computer/$account->computer_id")
            ->with('status', 'Account has been removed from this Computer');
    }
}
