<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\ComputerAccount;
use App\AccountType;
use App\Http\Requests\ComputerAccountFormRequest;

class ComputerAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        abort(404);
    }

    public function create(Computer $computer)
    {
        $this->authorize('create', ComputerAccount::class);

        return view('computers.account.create', compact('computer'))
            ->with('types', AccountType::all());
    }

    public function store(ComputerAccountFormRequest $request, Computer $computer)
    {   
        $this->authorize('create', ComputerAccount::class);

        $account = ComputerAccount::create([
            'computer_id' => $computer->id,
            'accountName' => $request->get('accountName'),
            'type_id' => $request->get('type_id'),
            'password' => $request->get('password'),
        ]);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', '<strong>' . $account->type->type . '</strong> account has been registered to this computer');
    }

    public function show()
    {
        abort(404);
    }

    public function edit(Computer $computer, ComputerAccount $account)
    {
        $this->authorize('update', $account);

        return view('computers.account.edit', compact('account'))
            ->with('types', AccountType::all());
    }

    public function update(ComputerAccountFormRequest $request,Computer $computer, ComputerAccount $account)
    {
        $this->authorize('update', $account);

        $account->update([
            'accountName' => $request->get('accountName'),
            'type_id' => $request->get('type_id'),
            'password' => $request->get('password'),
        ]);

        return redirect()->route('computers.show', $computer->id)
            ->with('status', "Account:<strong>$account->accountName</strong> successfully updated");
    }

    public function destroy(Computer $computer, ComputerAccount $account)
    {
        $this->authorize('update', $account);
        
        $account->delete();

        return redirect()->route('computers.show', $computer->id)
            ->with('status', "Account:<strong>$account->accountName</strong> has been removed from this Computer");
    }
}
