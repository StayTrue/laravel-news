<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;

class CategoryController extends Controller
{
    public function new() {
        return view('add-category');
    }

    public function admin() {
        $categories = Category::all();
        return view('admin-categories', compact('categories'));
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('edit-category', compact('category'));
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
        ]);   
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect('/manager/categories')->with('status', 'Category was updated successfuly');
    }

    public function delete($id) {
        $category = Category::findOrFail($id); 
        $news = News::where('category_id', $id);
        foreach($news as $news_item) {
            $news_item->delete();
        }
        $category->delete();
        return redirect('/manager/categories')->with('status', 'Category was deleted successfuly');    
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
