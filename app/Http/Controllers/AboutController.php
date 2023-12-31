<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // $posts = Post::all();

        return view('about');
    }

    public function create()
    {
        $postsArr = [
            [
                "title" => "big title",
                "content" => "big content",
                "image" => "big image",
                "likes" => 20,
                "is_published" => 1
            ],

            [
                "title" => "1 another big title",
                "content" => "1 another big content",
                "image" => "1 another big image",
                "likes" => 30,
                "is_published" => 1
            ],
            [
                "title" => "2 another big title",
                "content" => "2 another big content",
                "image" => "2 another big image",
                "likes" => 30,
                "is_published" => 1
            ],
            [
                "title" => "3 another big title",
                "content" => "3 another big content",
                "image" => "3 another big image",
                "likes" => 30,
                "is_published" => 1
            ],
            [
                "title" => "4 another big title",
                "content" => "4 another big content",
                "image" => "4 another big image",
                "likes" => 30,
                "is_published" => 1
            ],
        ];

        foreach ($postsArr as $item) {
            // dd($item);
            Post::create($item);
        }



        dd('created');
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
