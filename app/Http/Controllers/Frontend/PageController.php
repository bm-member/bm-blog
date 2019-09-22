<?php

namespace App\Http\Controllers\Frontend;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('frontend.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('frontend.show', compact('post'));
    }
}
