@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h1 class="font-weight-bold">{{ $post->title }}</h1>
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Post ID:</strong></span>
                            <span style="margin-left: 20px;">{{ $post->_id }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>User ID:</strong></span>
                            <span style="margin-left: 20px;">{{ $post->user_id }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Created At:</strong></span>
                            <span style="margin-left: 20px;">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Updated At:</strong></span>
                            <span style="margin-left: 20px;">{{ \Carbon\Carbon::parse($post->updated_at)->format('d M, Y') }}</span>
                        </li>
                        <li class="list-group-item">
                            <span><strong>Content:</strong></span>
                            <p>{{ $post->content }}</p>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
                    <div class="d-flex">
                        <a href="{{ route('admin.posts.edit', $post->_id) }}" class="btn btn-primary me-2">Edit</a>
                        <a href="{{ route('admin.posts.delete', $post->_id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
