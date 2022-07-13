<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $posts = Post::all();

        return view('posts.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = Post::create();

        $post->addMediaFromRequest('image')->toMediaCollection();

        // $post->addMediaFromRequest('image')
        //     ->usingName('Beaturful Car')
        //     ->usingFileName('Lambergini-car.jpg')
        //     ->toMediaCollection('cars');

        return back();
    }

    public function destroy()
    {
        $post = Post::find(9)->delete();
    }
}
