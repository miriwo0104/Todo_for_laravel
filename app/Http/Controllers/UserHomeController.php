<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function user_home() {
        $items = Todo::all();
        $user_items = $items->filter(function($user) {
            return $user->users_id = Auth::id();
        });
        return view('home.user_home', ['items' => $user_items]);
    }

    public function todo_setting($todo_id) {
        $item = Todo::whereId($todo_id)->get();
        return view('home.todo_setting', ['item' => $item]);
    }
}
