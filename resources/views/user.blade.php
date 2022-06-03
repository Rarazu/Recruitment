<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-control {
            border-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/user/store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">E-Mail</label>
                        <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input name="address" type="text" class="form-control" value="{{ old('address') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>