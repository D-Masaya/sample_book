@extends('layouts.app')

@section('content')

<div class="container pt-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ジャンルID</th>
        <th scope="col">本のジャンル</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->name}}</td>
        <td><a href="{{route('categories.edit', ['category'=>$value->id])}}"><button type="button" class="btn btn-warning">編集</button></a></td>
        <td><a href=""><button type="button" class="btn btn-danger">削除</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection()