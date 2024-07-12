<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{id}', [PostsController:: class, 'index']);
