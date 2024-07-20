@extends('layouts.app')

@section('content')
   <h1>Blog Post Details</h1>
   <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
   <ul>
      <h3>{{ $post->title }}</h3>      
      <p>ID: {{ $post->id }}</p>
      <p>{{ $post->content }}</p>
   </ul>
   <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
   <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection