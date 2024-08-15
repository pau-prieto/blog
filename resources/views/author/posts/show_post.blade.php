@extends('layouts.author')

@section('content')
    <div class="mx-auto" style="max-width: 800px; padding: 20px;">
        <a href="{{ route('author.posts.index') }}" class="nav-link">Back</a>
        <h1 class="mb-4 text-center" style="font-family: 'Times New Roman', serif; font-size: 42px; font-weight: 400;">Blog Post Details</h1>
        <h3 class="font-weight-bold">{{ $post->title }}</h3>
        <p>Post ID: {{ $post->id }}</p>
        <p>{{ $post->content }}</p>
        <hr>
        <div class="d-flex justify-content-between">
            <p class="mt-2"><strong>Likes:</strong> {{ $post->likes }}</p>
        </div>
    </div>
    <div class="mt-4 d-flex justify-content-between mx-auto" style="max-width: 800px;">
        <div class="d-flex">
            <form action="{{ route('author.posts.like', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn mx-3" style="background-color: #96b2f5">Like</button>
            </form>
            <form action="{{ route('author.posts.unlike', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn mx-3" style="background-color: #f9f49a">Unlike</button>
            </form>
        </div>
        <div class="d-flex">
            <a href="{{ route('author.posts.edit', $post->id) }}" class="btn mx-3" style="background-color: #a6e7a6">Edit</a>
            <form action="{{ route('author.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn mx-3" style="background-color: #f596a9">Delete</button>
            </form>
        </div>
    </div>
@endsection