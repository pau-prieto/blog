@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center" style="font-family: 'Times New Roman', serif; font-size: 42px; font-weight: 400;">Blog Post Details</h1>
    <a href="{{ url()->previous() }}" class="btn btn-pastel-blue mb-4">Back</a>
    <div class="mx-auto" style="max-width: 800px; padding: 20px;">
        <h3 class="font-weight-bold">{{ $post->title }}</h3>
        <p>Post ID: {{ $post->id }}</p>
        <p>{{ $post->content }}</p>
    </div>
    <div class="mt-4 d-flex justify-content-between mx-auto" style="max-width: 800px;">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-pastel-green">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-pastel-pink">Delete</button>
        </form>
    </div>
@endsection