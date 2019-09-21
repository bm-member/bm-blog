<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('backend.post.index', compact('posts'));
    }


    public function create()
    {
        $cats = Category::all();
        return view('backend.post.create', compact('cats'));
    }


    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('admin/post')->with('status', 'Created Succes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
