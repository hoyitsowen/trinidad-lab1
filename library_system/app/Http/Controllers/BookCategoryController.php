<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function index()
    {
        $categories = BookCategory::all();
        return view('index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:100',
            'description' => 'nullable|string',
        ]);

        $category = BookCategory::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
        ]);

        return response()->json($category, 201);
    }
}
