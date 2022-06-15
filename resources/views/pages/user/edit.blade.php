@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card m-3">
        <div class="card-header bg-info">
         <h4>Edit User</h4>
        </div>
        <div class="card-body">
         <form action="/user/edit/update/{{ $user->id }}" method="POST">
            {{-- @method('put') --}}
             @csrf
             <div class="row">
                 <div class="col-md-6">
                     <div class="mb-3">
                         <label class="form-label">Nama : </label>
                         <input name="name" type="text" class="form-control 
                         @error ('name') is-invalid @enderror"
                         value="{{ old('name', $user->name) }}">
                         
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
                         value="{{ old('email', $user->email) }}">
                         
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
                         value="{{ old('address', $user->address) }}">

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
                         value="{{ old('password', $user->password) }}">
                         
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
                         value="{{ old('password_confirm') }}">
                         
                         @error('password_confirm')
                             <div class="alert alert-danger my-2">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                 </div>
                 <div class="col-md-10">
                     <button class="btn btn-success">Save</button>
                 </div>
                 <div class="col-md-2">
                    <a href="{{ route('user.index') }}">
                        Back to List User
                     </a>
                 </div>
             </div>
         </form>
    </div>
    </div>
</div>
@endsection