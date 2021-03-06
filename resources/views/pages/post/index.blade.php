@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('post.index') }}">
            <div class="input-group mb-3">
                <span class="input-group-prepend">
                  <button class="btn btn-info text-white" type="submit">
                    <i class="fa fa-search"></i> Search</button>
                </span>
                <input class="form-control" type="text" 
                name="search" placeholder="Search..."
                value="{{ request('search') }}">
            </div>
        </form>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-accent-info">
        <div class="card-header">
            List Posts
            <div class="float-right">
                <a href="{{ route('post.create') }}" class="badge bg-info p-2">
                    Add Post
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card my-3">
                        @if ($post->image)
                            <div style="max-height: 150px; overflow:hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" 
                                alt="pict" class="card-img-top">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/400x200?{{ $post->title }}" 
                            class="card-img-top" alt="Pict">                            
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $post->title }}
                            </h5>
                            <p>
                                <small>
                                    By : 
                                    {{ $post->author }}
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">
                                {{ $post->excerpt() }}
                            </p>
                            <a href="/post/{{ $post->id }}" class="btn text-white" style="background: #6495ED">
                                Read More
                            </a>
                            <a href="post/edit/{{ $post->id }}" class="badge bg-warning">
                                <i class="fa fa-edit fa-lg m-1"></i>
                            </a>
                            <a href="post/delete/{{ $post->id }}" class="badge bg-danger"
                                onclick="return confirm('Are You Sure?')">
                                <i class="fa fa-trash fa-lg m-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{ $posts->links() }}
@endsection