<?php

namespace App\Http\Controllers;

use App\Models\Post;
use illuminate\Http\Request;

class PostController extends Controller {
    public function index()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);

        //Post::create($validated);
        dd($request->all());
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->author = $request->input('author');
        $post->save();
    }
}