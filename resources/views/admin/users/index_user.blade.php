@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Management</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{  route('users.create') }}" class="btn btn-sm btn-outline-secondary">Create new user</a>
            </div>
        </div>
    </div>

    <div>
        @foreach ($users as $user)
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->email }}</p>
                    <div class="d-flex justify-content-between">
                        <p class="mb-1">Role: {{ $user->role }}</p>
                        <a href="{{ route('users.show', $user->id) }}" class="text-reset text-decoration-none">View</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection