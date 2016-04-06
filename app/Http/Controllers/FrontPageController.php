<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Post;
use Category;

class FrontPageController extends Controller
{
    public function index()
    {
        return redirect('/blog');
    }

    public function blog()
    {
        $posts = Post::type('post')->published()->with('author')->paginate(5)->orderBy('created_at','desc');
        return view('blog.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::slug($slug)->first();
        return view('blog.post', compact('post'));
    }

//    public function category($slug)
//    {
//        $cate = Category::slug($slug)->first();
//        $posts = $cate->posts()->get();
//        return view('frontpages.category', compact('posts', 'cate'));
//    }
}
