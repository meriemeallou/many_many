<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Request $request){
        $posts = Post::all();
        return view('show', compact('posts'));
    }
}
