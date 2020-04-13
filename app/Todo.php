<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //todosテーブルを紐づける
    protected $table = 'todos';
}
