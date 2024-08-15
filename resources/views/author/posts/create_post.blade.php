@extends('layouts.author')

@section('content')
    <div class="content-container">
        <a href="{{ route('author.posts.index') }}" class="nav-link">Back</a>
        <h1 class="mb-4 text-center" style="font-family: 'Times New Roman', serif; font-size: 42px; font-weight: 400;">Create Blog Post</h1>
        <form action="{{ route('author.posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <div class= "d-flex justify-content-between">
                <button type="submit" class="btn mt-3" style="background-color: #75cef8">Submit</button>
                <a href="{{ route('author.posts.index') }}" class="btn mt-3" style="background-color: #f596a9">Cancel</a>
            </div>
        </form>
    </div>
@endsection