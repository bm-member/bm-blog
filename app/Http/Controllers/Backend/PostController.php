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
        $cats = Category::all();
        $post = Post::findOrFail($id);
        return view('backend.post.edit', compact('cats', 'post'));
    }


    public function update(Request $request, $id)
    {
        Post::findOrFail($id)->update($request->all());

        return redirect('admin/post')->with('status', 'Updated Succes');
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('admin/post')->with('status', 'Deleted Succes');
    }
}
