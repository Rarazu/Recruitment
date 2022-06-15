{{-- @extends('layouts.main') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <div class="card m-3">
           <div class="card-header bg-info">
            <h4>Form User</h4>
           </div>
           <div class="card-body">
               {{-- tampilan error atas --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action={{ url('/user/store') }} method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nama : </label>
                            <input name="name" type="text" class="form-control 
                            @error ('name') is-invalid @enderror"
                            value={{ old('name') }}>
                            
                            @error('name')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Email : </label>
                            <input name="email" type="text" class="form-control 
                            @error ('email') is-invalid @enderror"
                            value={{ old('email') }}>
                            
                            @error('email')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Alamat :</label>
                            <input name="address" type="text" class="form-control
                            @error ('address') is-invalid @enderror"
                            value={{ old('address') }}>

                            @error('address')
                            <div class="alert alert-danger my-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Password : </label>
                            <input name="password" type="password" class="form-control 
                            @error ('password') is-invalid @enderror"
                            value={{ old('password') }}>
                            
                            @error('password')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password : </label>
                            <input name="password_confirm" type="password" class="form-control 
                            @error ('password_confirm') is-invalid @enderror"
                            value={{ old('password_confirm') }}>
                            
                            @error('password_confirm')
                                <div class="alert alert-danger my-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
           </div>
       </div>
   </div>

    {{-- Halo --}}
    {{-- @if ($name) --}}
        {{-- span.text-danger => enter --}}
        {{-- <span class="text-danger h1">{{ $name }}</span> --}}
    {{-- @else --}}
        {{-- Gaiss? Namamu masih kosong --}}
    {{-- @endif --}} 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>