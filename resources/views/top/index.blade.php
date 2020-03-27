@extends('layouts.application')

@section('content')

  <p>TODOアプリ</p>
  <a href="/login">
    <button type="button" class="btn btn-primary">ログイン</button>
  </a>
  <a href="/register">
    <button type="button" class="btn btn-success">新規登録</button>
  </a>
@endsection