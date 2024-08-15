@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Management</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{  route('admin.posts.create') }}" class="btn btn-sm btn-outline-secondary">Create Post</a>
            </div>
        </div>
    </div>

    <div>
        @foreach ($posts as $post)
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="text-reset text-decoration-none">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection