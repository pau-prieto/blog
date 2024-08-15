@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Delete User</h2>
        <p>
            Are you sure you want to delete this user?
        <br>
            This action will <strong>permanently</strong> remove the user data and is unrecoverable.
        </p>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}" disabled>
            </div>

            {{-- Delete Button --}}
            <button type="submit" class="btn btn-danger">Delete User</button>
            
            {{-- Back Button --}}
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary ml-2">Cancel</a>
        </form>
    </div>
@endsection
