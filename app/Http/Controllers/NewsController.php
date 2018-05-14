<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewsController extends Controller
{
    public function index($id = 0) {
        if ($id > 0) {
            $news = News::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $news = News::orderBy('created_at','desc')->paginate(10);
        }
        return view('news', compact('news'));
    }

    public function admin() {
        $news = News::orderBy('created_at','desc')->paginate(10);
        return view('admin', compact('news'));
    }

    public function new() {
        $categories = Category::orderBy('id')->get();
        return view('add-news', compact('categories'));
    }

    public function edit($id) {
        $news = News::findOrFail($id);
        $categories = Category::orderBy('id')->get();
        return view('edit-news', compact('news', 'categories'));
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
