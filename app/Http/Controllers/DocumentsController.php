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
        return view('document.create')->with('categories', DocumentCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentFormRequest $request)
    {
        $request->validate([
            'title' => 'unique:documents',
            'file' =>'required|mimes:pdf|max:10000',
        ]);

        $this->upload(
            Document::create([
                'title' => $request->get('title'),
                'category_id' => $request->get('category_id'),
                'description' => $request->get('description'),
            ]),
            $request->file('file')
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
        return view('document.show', compact('document'));
    }
    
    public function addFile(Request $request, Document $document)
    {
        $request->validate(['file' =>'required|mimes:pdf|max:10000']);

        $this->upload($document, $request->file('file'));  

        return redirect()->back()
            ->with('status', 'File successfully uploaded');
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

    protected function upload($document, $file)
    {   
        $filename = str_replace(' ', '-', $document->title)
            . '_' . time() . '.'
            . $file->getClientOriginalExtension();

        $file->storeAs('public/documents', $filename);

        $document->files()->save(
            new DocumentFile([
                'filename' => $filename,
            ])
        );
    }
}
