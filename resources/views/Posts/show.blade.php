@extends('layouts.app')

@section('content')
   <h1>Blog Post Details</h1>
   <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
   <ul>
      <h3>{{ $post->title }}</h3>      
      <p>ID: {{ $post->id }}</p>
      <p>{{ $post->content }}</p>
   </ul>
@endsection