<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_todo() {
        return view('post.add_todo');
    }
}
