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

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" 
                            alt="pict" class="img-fluid mt-3" style="width:350px">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/400x200?{{ $post->title }}" 
                        alt="pict" class="img-fluid my-3">
                    @endif
        
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