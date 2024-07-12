<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// class PostsController extends Controller
// {
//     public function index ($id) {
//         $posts = DB::table('posts') ->where('id', $id) ->first();
//         var_dump($posts);
//         return view('posts.index');
//     }
// }

class PostsController extends Controller
{
    public function index($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        var_dump($posts);
        return view('posts.index', ['post' => $posts]);
    }
}
