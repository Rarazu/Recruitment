@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card m-3">
        <div class="card-header bg-secondary">
            <h4 class="text-white">
                Edit Post
            </h4>
        </div>
        <div class="card-body">
            <form action="/post/edit/update/{{ $post->id }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Title : </label>
                        <input name="title" type="text" class="form-control 
                        @error ('title') is-invalid @enderror"
                        value="{{ old('title', $post->title) }}">
                        
                        @error('title')
                            <div class="alert alert-danger my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Description :</label>
                        <textarea class="form-control @error ('description') is-invalid @enderror" 
                        name="description" rows="3"
                        value="{{ old('description') }}">{{ $post->description }}</textarea>

                        {{-- <label class="form-label">Description : </label>
                        <input name="description" type="text" class="form-control 
                        @error ('description') is-invalid @enderror"
                        value="{{ old('description', $post->description) }}"> --}}
                        
                        @error('description')
                            <div class="alert alert-danger my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Author : </label>
                        <input name="author" type="text" class="form-control 
                        @error ('author') is-invalid @enderror"
                        value="{{ old('author', $post->author) }}">
                        
                        @error('author')
                            <div class="alert alert-danger my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <button class="btn btn-success">Save</button>
                    </div>
                    <div class="col-md-2">
                       <a href="{{ route('post.index') }}">
                           Back to List Posts
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection