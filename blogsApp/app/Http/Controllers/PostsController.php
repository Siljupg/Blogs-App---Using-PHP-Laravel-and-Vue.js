<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index($id)
    {
        // $posts = DB::table('posts')->where('id', $id)->first();
        $posts = Post::where('id', $id)->first();
        if(!$posts){
            abort(404);
        }
        return view('posts.index', ['post' => $posts]);
    }
}
