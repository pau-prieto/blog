<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Auth::user()->post;
        return view('author.posts.index_post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.posts.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Ensure the post is associated with the current author
        $post = new Post($request->all());
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('author.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, "You do not have permission to view this post.");
        }

        return view('author.posts.show_post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // Authors can edit only their own posts
        if (Auth::id() !== $post->user_id) {
            abort(403, "You do not have permission to edit this post.");
        }

        return view('author.posts.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Authors can update only their own posts
        if (Auth::id() !== $post->user_id) {
            abort(403, "You do not have permission to update this post.");
        }

        $post->update($request->all());

        return redirect()->route('author.posts.index');
    }

    /**
     * Display the confirmation page for deleting the specified user.
     */
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        return view('author.posts.delete_post', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Authors can delete only their own posts
        if (Auth::id() !== $post->user_id) {
            abort(403, "You do not have permission to delete this post.");
        }

        $post->delete();
        return redirect()->route('author.posts.index');
    }
}
