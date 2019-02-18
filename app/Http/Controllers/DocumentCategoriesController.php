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

    public function index()
    {   
        return view('document.category.index')
            ->with('categories', DocumentCategory::all());
    }

    public function create()
    {
        return view('document.category.create');
    }

    public function store(DocumentCategoryFormRequest $request)
    {
        $request->validate(['categoryName' => 'unique:document_categories']);

        $category = DocumentCategory::create([
            'categoryName' => $request->get('categoryName'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('document.category.index')
            ->with('status', "Category:<strong>$category->categoryName</strong> successfully recorded");
    }

    public function show(DocumentCategory $category)
    {
        return view('document.category.show', compact('category'));
    }

    public function edit(DocumentCategory $category)
    {
        return view('document.category.edit', compact('category'));
    }

    public function update(DocumentCategoryFormRequest $request, DocumentCategory $category)
    {
        $category->update([
            'categoryName' => $request->get('categoryName'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('document.category.show', $category->id)
            ->with('status', 'Category successfully updated');
    }

    public function destroy($id)
    {
        abort(403);
    }
}
