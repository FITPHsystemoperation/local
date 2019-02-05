<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumentFormRequest;
use App\Document;
use App\DocumentCategory;
use App\DocumentFile;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('document.index')->with('documents', Document::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('document.create')
            ->with('categories', DocumentCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentFormRequest $request)
    {
        $filename = str_replace(' ', '-', $request->get('title'))
            . '_' . time() . '.'
            . $request->file('file')->getClientOriginalExtension();

        $request->file('file')->storeAs('public/documents', $filename);

        Document::create([
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description'),
        ])->files()->save(
            new DocumentFile(['filename' => $filename])
        );

        return redirect('/documents')
            ->with('status', 'Document successfully recorded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return $document->files;
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
