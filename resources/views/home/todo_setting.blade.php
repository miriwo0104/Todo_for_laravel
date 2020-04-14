@extends('layouts.application')


@section('content')
    
    <h1>todo_setting</h1>
    <table>
        <tr>
            <th>id</th>
            <th>やること</th>
            <th>memo</th>
        </tr>
        @foreach ($item as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->content}}</td>
                <td>{{$item->memo}}</td>
            </tr>
        @endforeach
    </table>
@endsection
