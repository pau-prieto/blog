@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Blog Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-pastel-green mt-3">Submit</button>
        <a href="{{ route('posts.index') }}" class="btn btn-pastel-pink mt-3">Cancel</a>
    </form>
@endsection