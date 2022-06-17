@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('user.index') }}">
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
            List User
            <div class="float-right">
                <a href="{{ route('user.create') }}" class="badge bg-info p-2">
                    Add User
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="/user/edit/{{ $user->id }}" class="badge bg-warning">
                                <i class="fa fa-edit fa-lg m-2"></i>Edit
                            </a>
                            <a href="/user/delete/{{ $user->id }}" class="badge bg-danger mx-2"
                                onclick="return confirm('Are You Sure?')">
                                <i class="fa fa-trash fa-lg m-2"></i>Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
