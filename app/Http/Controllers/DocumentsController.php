<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumentFormRequest;
use App\Document;
use App\DocumentCategory;
use App\DocumentFile;

class DocumentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('document.index')->with('documents', Document::all());
    }

    public function create()
    {   
        $this->authorize('create', Document::class);

        return view('document.create')->with('categories', DocumentCategory::all());
    }

    public function store(DocumentFormRequest $request)
    {
        $this->authorize('create', Document::class);

        $request->validate([
            'title' => 'unique:documents',
            'file' =>'required|mimes:pdf|max:10000',
        ]);

        $document = Document::create([
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description'),
        ]);

        $this->upload($document, $request->file('file'));
        
        return redirect('/documents')
            ->with('status', "Document:<strong>$document->title</strong> successfully recorded");
    }

    public function show(Document $document)
    {
        return view('document.show', compact('document'));
    }

    public function edit(Document $document)
    {
        $this->authorize('update', $document);

        return view('document.edit', compact('document'))
            ->with('categories', DocumentCategory::all());
    }

    public function update(DocumentFormRequest $request, Document $document)
    {
        $this->authorize('update', $document);

        $document->update([
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('documents.show', $document->id)
            ->with('status', 'Document information successfully updated');
    }

    public function destroy($id)
    {
        abort(403);
    }

    public function addFile(Request $request, Document $document)
    {
        $this->authorize('update', $document);
        
        $request->validate(['file' =>'required|mimes:pdf|max:10000']);

        $this->upload($document, $request->file('file'));  

        return redirect()->back()
            ->with('status', 'File successfully added to this document');
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
