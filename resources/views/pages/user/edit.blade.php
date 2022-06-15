@extends('layouts.app')

@section('content')
<div class="card card-accent-warning">
    <div class="card-header">
        Edit
    </div>
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama" value="{{ $user->name }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="E-Mail" value="{{ $user->email }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="address" class="form-control @error('address') is-invalid @enderror" type="text" placeholder="Alamat" value="{{ $user->address }}">
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">Kosongi input Password dan Konfirmasi Password untuk tetap menggunakan password lama</div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" placeholder="Konfirmasi Password">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-warning" type="submit">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection