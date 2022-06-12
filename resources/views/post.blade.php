

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="/">BiBlog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/post">Post</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="card m-3">
            <div class="card-header bg-secondary">
                <h4 class="text-white">
                    Post
                </h4>
            </div>
            <div class="card-body">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action={{ url('/post/store') }} method="POST">
                    @csrf
                    {{-- <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Title : </label>
                            <input name="title" type="text" class="form-control 
                            @error ('title') is-invalid @enderror"
                            value={{ old('title') }}>
                            
                            @error('title')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Title : </label>
                            <input name="title" type="text" class="form-control 
                            @error ('title') is-invalid @enderror"
                            value={{ old('title') }}>
                            
                            @error('title')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Description : </label>
                            <input name="description" type="text" class="form-control 
                            @error ('description') is-invalid @enderror"
                            value={{ old('description') }}>
                            
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
                            value={{ old('author') }}>
                            
                            @error('author')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success" type="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>
