<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function new() {
        return view('add-category');
    }

    public function admin() {
        $categories = Category::all();
        return view('admin-categories', compact('categories'));
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/manager/categories')->with('status', 'Category was created successfuly');
    }
}
