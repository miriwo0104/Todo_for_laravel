<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_todo() {
        return view('post.add_todo');
    }

    public function regist_todo(Request $request) {
        $todo_info = [
            'todo' => $request->todo,
            'priority' => $request->priority,
            'memo' => $request->memo,
        ];

        $new_todo = new Todo();
        $new_todo->user_id = Auth::id();
        $new_todo->content = $todo_info['todo'];
        $new_todo->priority = $todo_info['priority'];
        $new_todo->memo = $todo_info['memo'];
        $new_todo->save();
        return redirect('/user_home');
    }


}
