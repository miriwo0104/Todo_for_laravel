@extends('layouts.application')

@section('content')
    <h1>TODO追加画面</h1>
    <p>やること</p>
    <input type="text">
    <p>優先度</p>
    <select name="example">
        <option value="1" selected>高い</option>
        <option value="2">普通</option>
        <option value="3">低い</option>
    </select>
    <p>メモ</p>
    <textarea name="" id="" cols="30" rows="10"></textarea>
@endsection