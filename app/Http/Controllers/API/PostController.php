<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'data' => $posts,
            'message' => 'success',
        ], 200);
    }

    public function show(Post $id)
    {
        $posts = Post::all($id);
        return response()->json([
            'data' => $id,
            'message' => 'success',
        ], 200);
    }
}
