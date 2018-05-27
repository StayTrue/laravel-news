<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('created_at','desc')->paginate(10);
        return view('news', compact('news'));
    }

    public function browse_by_category($id) {
        $category = Category::findOrFail($id);
        $news = News::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('browse-category', compact('news', 'category'));
    }

    public function view($id) {
        $news = News::findOrFail($id);
        return view('view-news', compact('news'));
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'excerpt' => 'required|max:500',
            'category' => 'required'
        ]);
        $news = News::findOrFail($id);
        $news->name = $request->title;
        $news->content = $request->content;
        $news->excerpt = $request->excerpt;
        $news->category_id = $request->category;
        $news->save();
        return redirect('/manager')->with('status', 'News was updated successfuly');
    }

    public function delete($id) {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('/manager')->with('status', 'News was deleted successfuly');
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'excerpt' => 'required|max:500',
            'category' => 'required'
        ]);
        $news = new News;
        $news->name = $request->title;
        $news->content = $request->content;
        $news->excerpt = $request->excerpt;
        $news->category_id = $request->category;
        $news->save();
        return redirect('/manager')->with('status', 'News was created successfuly');
    }
}
