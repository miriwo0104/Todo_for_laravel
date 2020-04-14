@extends('layouts.application')


@section('content')
    
    <h1>usre home</h1>
    <!-- ボタンを追加してTODOを追加できる様にする、新規追加する際の内容はTODO名、優先度、めも -->
    <a href="/add_todo">
        <button type="button" class="btn btn-success">新規TODOを追加</button>
    </a>
    <!-- 大枠のコンテンツ毎にTODOを表示 -->
    <table>
        <tr>
            <th>id</th>
            <th>やること</th>
            <th>memo</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->content}}</td>
                <td>{{$item->memo}}</td>
                <td><a href="{{$item->id}}/todo_setting">編集</a></td>
                <td><a href="{{$item->id}}/todo_setting">削除</a></td>
            </tr>

        @endforeach
    </table>
    <!-- 優先度順に表示する、優先度は三段階くらい、優先度被ったら50音順で表示する -->
@endsection
