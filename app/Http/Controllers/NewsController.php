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
        $news = $category->news()->orderBy('created_at', 'desc')->paginate(10);
        return view('browse-category', compact('news', 'category'));
    }

    public function view($id) {
        $news = News::findOrFail($id);
        return view('view-news', compact('news'));
    }

}
