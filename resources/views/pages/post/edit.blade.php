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
            <form action="/post/edit/update/{{ $post->id }}" method="POST"
            enctype="multipart/form-data">
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
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="image" class="form-label">
                            Image : 
                        </label>
                        <input type="hidden" name="oldImage" value="{{ $post->image }}">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" 
                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control p-1 @error ('image') is-invalid @enderror" 
                        id="image" type="file" name="image" onchange="previewImage()">
                        @error('image')
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
<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')  
        
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result
        }
    }
</script>
@endsection