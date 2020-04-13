@extends('layouts.application')

@section('content')
<form action="/add_todo" method="post">
    @csrf
    <h1>TODO追加画面</h1>
    <p>やること</p>
    <input type="text" name="todo">
    <p>優先度</p>
    {{Form::select('priority', ['低い', '普通', '高い'], 2)}}
    <p>メモ</p>
    <textarea name="memo" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="send">
    <br>
</form>
@endsection