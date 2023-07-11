<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function update()
    {
        $post = Post::find(6);
        $post->update([
            "title" => "111 updated another big title",
            "content" => "111 updated another big content",
            "image" => "111 updated another big image",
            "likes" => 77,
            "is_published" => 1
        ]);

        dd('updated');
    }

    public function delete()
    {
        $post = Post::find(3);
        $post->delete();
        dd('post deleted');
    }

    public function firstOrCreate()
    {
        $myPost = Post::firstOrCreate([
            "title" => "big title 123"
        ], [
            "title" => "big title",
            "content" => "big content 123",
            "image" => "big image",
            "likes" => 20,
            "is_published" => 1
        ]);
        dump($myPost->content);
        dd('end');
    }
}
