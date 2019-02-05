<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentCategory;
use App\Http\Requests\DocumentCategoryFormRequest;

class DocumentCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('document.category.index')
            ->with('categories', DocumentCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentCategoryFormRequest $request)
    {
        $request->validate(['categoryName' => 'unique:document_categories']);

        DocumentCategory::create([
            'categoryName' => $request->get('categoryName'),
            'description' => $request->get('description'),
        ]);

        return redirect('/document/categories')
            ->with('status', 'Document Category successfully added.');
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
    public function edit(DocumentCategory $category)
    {
        return view('document.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentCategoryFormRequest $request, DocumentCategory $category)
    {
        $category->update([
            'categoryName' => $request->get('categoryName'),
            'description' => $request->get('description'),
        ]);

        return redirect('/document/categories')
            ->with('status', 'Document Category successfully updated.');
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
