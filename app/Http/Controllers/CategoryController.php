<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $data = request(['title', 'description']);
        return view('categories.create', compact('data'));
    }

    public function store(CategoryStoreRequest $request)
    {
        $request->validated();
        $data = request(['title', 'description']);
        \App\Models\Category::create($data);
        return redirect() -> to('categories');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));

    }

    public function update(CategoryStoreRequest $request)
    {
        $request->validated();
        $category = Category::find($request['category_id']);
        $category['title'] = $request['title'];
        $category['description'] = $request['description'];
        $category->save();
        return redirect() -> to('categories');
    }

    public function delete($category)
    {
        $category = Category::find($category);
        $category->delete();
        return redirect() -> to('categories');
    }
}
