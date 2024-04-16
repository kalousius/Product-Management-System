<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Import the Category model

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all(); // Retrieve all categories from the database
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create'); // Load the create category form
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create a new category instance
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        // Save the category
        $category->save();

        // Optionally, flash a success message
        $request->session()->flash('success', 'Category created successfully.');

        // Redirect back to the category index route
        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // Delete the category
        $category->delete();

        // Optionally, flash a success message
        session()->flash('success', 'Category deleted successfully.');

        // Redirect back to the category index route
        return redirect()->route('category.index');
    }
}