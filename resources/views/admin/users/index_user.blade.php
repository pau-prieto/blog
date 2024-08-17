@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Management</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">CREATE USER</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td class="text-center">
                             {{-- View Button --}}
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                             {{-- Edit Button --}}
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary mx-3">Edit</a>
                             {{-- Delete Button --}}
                            <a href="{{ route('users.delete', $user->id) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
