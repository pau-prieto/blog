@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    <option value="author" {{ $user->role == 'author' ? 'selected' : '' }}>Author</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            {{-- Update Button --}}
            <button type="submit" class="btn btn-primary">Update</button>

            {{-- Back Button --}}
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary ml-2">Cancel</a>
        </form>
    </div>
@endsection