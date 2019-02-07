<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComputerAccount;
use App\AccountType;
use App\Http\Requests\ComputerAccountFormRequest;

class ComputerAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create($id)
    {
        $this->authorize('create', ComputerAccount::class);

        return view('computers.account.create', compact('id'))
            ->with('types', AccountType::all());
    }

    public function store(ComputerAccountFormRequest $request, $id)
    {   
        ComputerAccount::create([
            'computer_id' => $id,
            'accountName' => $request->get('accountName'),
            'type_id' => $request->get('type_id'),
            'password' => $request->get('password'),
        ]);

        return redirect("/computer/$id")
            ->with('status', 'Account has been added to this computer');
    }

    public function edit(ComputerAccount $account)
    {
        $this->authorize('update', $account);

        return view('computers.account.edit', compact('account'))
            ->with('types', AccountType::all());
    }

    public function update(ComputerAccountFormRequest $request, ComputerAccount $account)
    {
        $account->update([
            'accountName' => $request->get('accountName'),
            'type_id' => $request->get('type_id'),
            'password' => $request->get('password'),
        ]);

        return redirect("/computer/$account->computer_id")
            ->with('status', 'Account has been updated');
    }

    public function destroy(ComputerAccount $account)
    {
        $account->delete();

        return redirect("/computer/$account->computer_id")
            ->with('status', 'Account has been removed from this Computer');
    }

}
