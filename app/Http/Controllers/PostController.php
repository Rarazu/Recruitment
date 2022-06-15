<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('pages.post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);

        //Post::create($validated);
        //dd($request->all());
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->author = $request->input('author');
        $post->save();

        return redirect('/post');
    }

    public function create(Request $request)
    {
        return view('pages.post.create');
    }

    public function show(Post $post)
    {
        return view('pages.post.show', [
            "post" => $post
        ]);
    }

    public function edit($id)
    {
        $post   = Post::whereId($id)->first();
        return view('pages.post.edit', [
            "post" => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->author = $request->author;
        $post->save();

        return redirect('/post');
    }

    public function delete($id)
    {
        $post = Post::where('id', $id)
            ->delete();
        return redirect('/post')->with('success deleting');
    }
}
