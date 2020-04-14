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
        $items = Todo::whereId($todo_id)->get();
        $item = $items[0];
        return view('home.todo_setting', ['item' => $item]);
    }

    public function update(Request $request, $todo_id) {
//        $todo_info = [
//            'id' => $request->id,
//            'todo' => $request->todo,
//            'priority' => $request->priority,
//            'memo' => $request->memo,
//        ];
//
//        $todo = Todo::find($todo_id);
//
//        $todo->content = 'test111';
//        $todo->priority = 0;
//        $todo->memo = 'test111';
//        $todo->save();
        return redirect('/user_home');
    }
}
