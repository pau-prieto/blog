@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h2>{{ $user->name }}</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Email:</strong></span>
                            <span style="margin-left: 20px;">{{ $user->email }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Role:</strong></span>
                            <span style="margin-left: 20px;">{{ ucfirst($user->role) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Created:</strong></span>
                            <span style="margin-left: 20px;">{{ $user->created_at->format('d M, Y') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Updated:</strong></span>
                            <span style="margin-left: 20px;">{{ $user->updated_at->format('d M, Y') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                    <div class="d-flex">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary me-2">Edit</a>
                        <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
