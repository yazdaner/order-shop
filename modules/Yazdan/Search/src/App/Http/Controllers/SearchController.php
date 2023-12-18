<?php

namespace Yazdan\Search\App\Http\Controllers;

use Illuminate\Http\Request;
use Yazdan\Blog\App\Models\Blog;
use App\Http\Controllers\Controller;
use Yazdan\Course\App\Models\Course;
use Yazdan\Product\App\Models\Product;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);
        $blogs = Blog::where('title','LIKE',"%{$request->search}%")->latest()->paginate(10);
        $products = Product::where('title','LIKE',"%{$request->search}%")->latest()->paginate(10);
        $courses = Course::where('title','LIKE',"%{$request->search}%")->latest()->paginate(10);
        return view('Search::front.search',compact('blogs','products','courses'));
    }

}
