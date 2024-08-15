@extends('layouts.admin')

@section('content')
    <div class="mx-auto" style="max-width: 800px; padding: 20px;">
        <a href="{{ route('admin.posts.index') }}" class="nav-link">Back</a>
        <h1 class="mb-4 text-center" style="font-family: 'Times New Roman', serif; font-size: 42px; font-weight: 400;">Blog Post Details</h1>
        <h3 class="font-weight-bold">{{ $post->title }}</h3>
        <p>Post ID: {{ $post->id }}</p>
        <p>{{ $post->content }}</p>
        <hr>
        <div class="d-flex justify-content-between">
        </div>
    </div>
    <div class="mt-4 d-flex justify-content-between mx-auto" style="max-width: 800px;">
        <div class="d-flex">
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn mx-3" style="background-color: #a6e7a6">Edit</a>
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn mx-3" style="background-color: #f596a9">Delete</button>
            </form>
        </div>
    </div>
@endsection
