<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Blog',
            // 'posts' => Post::manual_all(),
            'posts' => Post::all(), // Eloquent ORM
        ];

        return view('posts.index', $data);
    }

    function show(Post $post)
    {
        // $post = Post::manual_find($slug);
        // $post = Post::where('slug', $slug)->first();

        $data = [
            'title' => 'Single Post',
            'post' => $post,
        ];
        // dd($data);
        return view('posts.show', $data);
    }
}
