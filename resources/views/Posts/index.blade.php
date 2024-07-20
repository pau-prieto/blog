@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center" style="font-family: 'Times New Roman', serif; font-size: 42px; font-weight: 400;">Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-pastel-blue mb-4">Create Post</a>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-pastel-green btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection