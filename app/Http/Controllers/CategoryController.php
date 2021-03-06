<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::unfeatured()->get()->translate(app()->getLocale());
        return view('categories', compact('categories'));
    }
    public function index_featured()
    {
        $categories = Category::featured()->get()->translate(app()->getLocale());
        return view('categories', compact('categories'));
    }

    public function show(Request $request)
    {
        $category = Category::find($request->id);
        return view('category-detail', compact('category'));
    }
}
