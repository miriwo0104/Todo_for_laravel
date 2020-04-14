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

    //test
    public function update(Request $request, $todo_id) {
        $todo_info = [
            'id' => $request->id,
            'todo' => $request->todo,
            'priority' => $request->priority,
            'memo' => $request->memo,
        ];
        
        $todo = Todo::find($todo_info['id']);

        $todo->content = $todo_info['todo'];
        $todo->priority = $todo_info['priority'];
        $todo->memo = $todo_info['memo'];
        $todo->save();
        return redirect('/user_home');
    }
}
