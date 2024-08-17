@extends('layouts.author')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h1>{{ $post->title }}</h1>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="created-at" class="form-label"><strong>Date created</strong></label>
                        <p id="created-at">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="updated-at" class="form-label"><strong>Date updated</strong></label>
                        <p id="updated-at">{{ \Carbon\Carbon::parse($post->updated_at)->format('d M, Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label"><strong>Content</strong></label>
                        <p id="content">{{ $post->content }}</p>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('author.posts.index') }}" class="btn btn-secondary">Back</a>
                    <div class="d-flex">
                        <a href="{{ route('author.posts.edit', $post->id) }}" class="btn btn-primary me-2">Edit</a>
                        <a href="{{ route('author.posts.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
