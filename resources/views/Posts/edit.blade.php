@extends('layouts.app')

@section('content')  
    <div class="content-container">
        <a href="{{ route('posts.index') }}" class="nav-link">Back</a>
        <h1 class="mb-4 text-center" style="font-family: 'Times New Roman', serif; font-size: 42px; font-weight: 400;">Edit Blog Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn mt-3" style="background-color: #a6e7a6">Update</button>
                <a href="{{ url()->previous() }}" class="btn mt-3" style="background-color: #96b2f5">Cancel</a>
            </div>
        </form>
    </div>
@endsection