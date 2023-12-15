<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Comments;

class ForumController extends Controller
{

    public function home() {
        $posts = Posts::all();
        return view('pages/home')->with('posts', $posts);
    }
}
