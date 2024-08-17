@extends('layouts.author')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h1>Delete Post</h1>
                </div>
                
                <div class="card-body">
                    <h3>
                        Are you sure you want to delete this post?
                    </h3>
                    <p>
                        This action will permanently remove the post, and its data will be unrecoverable.
                    </p>
                    <form action="{{ route('author.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" disabled>{{ $post->content }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('author.posts.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
