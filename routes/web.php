<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hello-world', function () {
    return 'Hello World!';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/json', function () {
    return ['foo' => 'bar'];
});

Route::get('test', function () {
    $name = request('name');
    if($name=='')
        return view('test', ['name' => 'N/A']);
    else
        return view('test', ['name' => $name]);
});

/* Need controller to handle big-size web projects, or else, the commented code below will work just fine.
* Refer to app > Http > Controllers > PostsController.php
*/
// Route::get('posts/{post}', function ($post) {
//     $posts = ['my-first-post' => 'This is my first blog.', 'my-second-post' => 'Now I\'m getting the hang of this blogging thing.'];

//     if(!array_key_exists($post, $posts))
//         abort(404, 'Post not available.');

//     return view('post', ['post' => $posts[$post]]);
// });
Route::get('posts/{post}', 'PostsController@show');