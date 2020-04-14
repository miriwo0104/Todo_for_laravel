@extends('layouts.application')


@section('content')
    <h1>todo_setting</h1>
<!--
    <form action="/{$item->id}/todo_update" method="post">
        @csrf
        @php
           $id = $item->id
        @endphp
        <h1>TODO編集画面</h1>
        <p>やること</p>
        <input type="text" name="todo" value="{{$item->content}}">
        <p>優先度</p>
        {{Form::select('priority', ['低い', '普通', '高い'], 2)}}
        <p>メモ</p>
        <textarea name="memo" id="" cols="30" rows="10">{{$item->memo}}</textarea>
        <br>
        <input type="submit" value="send">
        <br>
    </form>
-->
    <form action="/{$item->id}/todo_update" method="post">
        @csrf
        <h1>TODO追加画面</h1>
        <input type="hidden" name="id" value="{{$item->id}}">
        <p>やること</p>
        <input type="text" name="todo" value="{{$item->content}}">
        <p>優先度</p>
        {{Form::select('priority', ['低い', '普通', '高い'], 2)}}
        <p>メモ</p>
        <textarea name="memo" id="" cols="30" rows="10">{{$item->memo}}</textarea>
        <br>
        <input type="submit" value="send">
        <br>
    </form>
@endsection
