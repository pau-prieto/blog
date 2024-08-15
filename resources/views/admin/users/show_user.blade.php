@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>User Details</h2>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $user->name }}</h5>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Role: {{ ucfirst($user->role) }}</p>
                <p class="card-text">Created At: {{ $user->created_at->format('d M, Y') }}</p>
                <p class="card-text">Updated At: {{ $user->updated_at->format('d M, Y') }}</p>
            </div>
        </div>

        <div class="d-flex">
            {{-- Edit Button --}}
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary mr-2">Edit</a>
            
            {{-- Delete Button --}}
            <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Delete</a>

            {{-- Back Button --}}
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="mt-4">
            
        </div>
    </div>
@endsection
