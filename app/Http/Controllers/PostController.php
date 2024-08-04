<?php

namespace App\Http\Controllers;

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
       return view('Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posts.create');
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

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if(Auth::id() != $post->user_id){
            abort(403);
        }
        
        return view('Posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if(Auth::id() != $post->user_id){
            abort(403, "You do not have permission to edit this post.");
        }
        
        return view('Posts.edit', compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);

        if(Auth::id() != $post->user_id) {
            abort(403, "You do not have permission to update this post.");
        }

        $post->update($request->all());

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (Auth::id() != $post->user_id) {
            abort(403, "You do not have permission to delete this post.");
        }

        $post->delete();
        return redirect()->route('posts.index');
    }

    /**
     * Increment the specified resource.
     */
    public function like($id)
    {
        $post = Post::find($id);
        $post->increment('likes');

        return back();
    }

    /**
     * Decrement the specified resource.
     */
    public function unlike($id)
    {
        $post = Post::find($id);
        if ($post->likes > 0) {
            $post->decrement('likes');
        }

        return back();
    }
}
