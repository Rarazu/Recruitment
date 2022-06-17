<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $post = Post::latest();

        if (request('search')) {
            $post->where('title', 'like', '%' . request('search') . '%')
                 ->orWhere('description', 'like', '%' . request('search') . '%')
                 ->orWhere('author', 'like', '%' . request('search') . '%');
        }

        // $posts = Post::all();
        return view('pages.post.index', [
            'posts' => $post->paginate(6)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validated);
        //dd($request->all());
        // $post = new Post();
        // $post->title = $request->input('title');
        // $post->description = $request->input('description');
        // $post->author = $request->input('author');
        // $post->image = $request->input('image');
        // $post->save();

        return redirect('/post');
    }

    public function create(Request $request)
    {
        return view('pages.post.create', [
            'users' => User::all()
        ]);
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

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images');
        }

        Post::where('id', $post->id)
            ->update($validated);

        // $post = Post::find($id);
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->author = $request->author;
        // $post->image = $request->image;
        // $post->save();

        return redirect('/post');
    }

    public function delete(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);
        // $post = Post::where('id', $id)
        //     ->delete();
        return redirect('/post')->with('success deleting');
    }
}
