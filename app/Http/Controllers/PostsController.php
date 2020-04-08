<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) {
        $posts = ['my-first-post' => 'This is my first blog.', 'my-second-post' => 'Now I\'m getting the hang of this blogging thing.'];

        if(!array_key_exists($post, $posts))
            abort(404, 'Post not available.');

        return view('post', ['post' => $posts[$post]]);
    }
}
