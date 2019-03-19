<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Software;
use App\Http\Requests\SoftwareFormRequest;

class SoftwaresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('softwares.index')
            ->with('softwares', Software::all());
    }

    public function create()
    {
        $this->authorize('create', Software::class);

        return view('softwares.create');
    }

    public function store(SoftwareFormRequest $request)
    {   
        $this->authorize('create', Software::class);

        $request->validate(['softwareName' => 'unique:software']);

        $software = Software::create([
            'softwareName' => $request->get('softwareName'),
            'specList' => explode(' ', $request['specList']),
        ]);

        return redirect()->route('softwares.index')
            ->with('status', "Software:<strong>$software->softwareName</strong> successfully recorded");  
    }

    public function show(Software $software)
    {
        return view('softwares.show', compact('software'));
    }

    public function edit(Software $software)
    {
        $this->authorize('update', $software);

       return view('softwares.edit', compact('software'));
    }

    public function update(SoftwareFormRequest $request, Software $software)
    {
        $this->authorize('update', $software);
        
        $software->update([
            'softwareName' => $request->get('softwareName'),
            'specList' => explode(' ', $request['specList']),
        ]);

        return redirect()->route('softwares.show', $software->id)
            ->with('status', "Software successfully updated");  
    }

    public function destroy($id)
    {
        abort(403);
    }
}
