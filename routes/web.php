<?php

use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    $posts = [];
    if(auth()->check()){
        //all users posts
        $posts = Post::all();
    }
    //$posts = Post::where('user_id',auth()->id())->get();
    return view('home',['posts'=>$posts]);
});

//register
Route::post('/register', 
    [UserController::class, 'register']
);

//logout
Route::post('/logout', 
    [UserController::class, 'logout']
);
Route::post('/login', 
    [UserController::class, 'login']
);

// blog post
Route::post('/create-post', 
    [PostController::class, 'createPost']
);

Route::get('/edit-post/{post}',[
    PostController::class, 'showEditScreen'
]);
Route::put('/edit-post/{post}',[
    PostController::class, 'actuallyEditPost'
]);
Route::delete('/delete-post/{post}',[
    PostController::class, 'actuallyDeletePost'
]);