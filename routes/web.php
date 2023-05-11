<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('authors/{author:username}',function(User $author){

    return view('posts.index', [
        'posts' => $author->posts,
        'categories' => Category::all()

    ]);
});
