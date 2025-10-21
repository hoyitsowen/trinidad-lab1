<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $categories = BookCategory::when($search, function ($query, $search) {
            return $query->where('category_name', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%");
        })->get();

        return view('index', compact('categories', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('book_category_images', 'public');
        }

        BookCategory::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Book category added successfully!');
    }
}
