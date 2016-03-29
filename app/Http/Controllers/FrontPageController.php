<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Post;
use Category;

class FrontPageController extends Controller
{
    public function blog()
    {
        $posts = Post::type('post')->published()->with('author')->paginate(5);
        return view('frontpages.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::slug($slug)->first();
        $similarPost = Post::type('post')->published()->where('id', '!=', $post->ID)->get()->random(6);
        return view('frontpages.post', compact('post', 'similarPost'));
    }

    public function category($slug)
    {
        $cate = Category::slug($slug)->first();
        $posts = $cate->posts()->get();
//        debugbar()->info($posts->toArray());
        return view('frontpages.category', compact('posts', 'cate'));
    }
}
