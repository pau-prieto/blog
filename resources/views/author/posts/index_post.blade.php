@extends('layouts.author')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('author.posts.create') }}" class="btn btn-sm btn-primary">CREATE POST</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Last Updated</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->content, 50) }}</td>
                        <td>{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('author.posts.show', $post->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="{{ route('author.posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary mx-1">Edit</a>
                            <a href="{{ route('author.posts.delete', $post->id) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
