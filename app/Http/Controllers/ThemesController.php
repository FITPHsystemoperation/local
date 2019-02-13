<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ThemesController extends Controller
{
    public function index()
    {
        $this->authorize('index', Theme::class);

        return view('themes.index')->with('themes', Theme::all());
    }

    public function create()
    {
        $this->authorize('create', Theme::class);

        return view('themes.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|unique:themes',
            'file' =>'required|max:10000',
        ]);

        $this->upload($request);
            
        return redirect('/themes')->with('status', 'Theme successfully uploaded'); 
    }

    public function show(Theme $theme)
    {
        return view('themes.show', compact('theme'));
    }

    public function edit($id)
    {
        abort(404);
    }

    public function update(Request $request, Theme $theme)
    {
        $theme->update([
            'enabled' => $request->get('enabled'),
        ]);

        return redirect()->back()
            ->with('status', 'Themes successfully updated');
    }

    public function destroy($id)
    {
        abort(403);
    }

    protected function upload($request)
    {   
        $filename = str_replace(' ', '-', $request->get('name')) . '.'
            . $request->file('file')->getClientOriginalExtension();

        Theme::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'file' => "storage/themes/$filename"
        ]);

        $request->file('file')->storeAs('public/themes', $filename);
    }
}
