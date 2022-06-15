@extends('layouts.main')

@section('content')
<div class="container">
    <div class="col-md-10">
        <div class="card border-info">
            <div class="row justify-content-left p-4 mb-5">
                <div class="col-md-12 mt-2">
                    <h2>{{ $post->title }}</h2>
                    <h6>
                        By : 
                            {{ $post->author }}
                    </h6>
                    <img src="https://source.unsplash.com/1200x300?{{ $post->title }}" 
                    alt="pict" class="img-fluid my-3">
        
                    <article class="my-3">
                        {{ $post->description }}
                    </article>
            
                    <a href="{{ route('post.index') }}">Back to Post</a>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection