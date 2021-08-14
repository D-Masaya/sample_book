@extends('layouts.app')

@section('content')

<table class="table">
<div class="container">
  <thead>
    <tr>
      <th scope="col">ユーザーID</th>
      <th scope="col">本のジャンル</th>
      <th scope="col">本のタイトル</th>
      <th scope="col">本の感想</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $value)
    <tr>
      <th scope="row">{{$value->user_id}}</th>
      <td>{{$value->category_id}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->message}}</td>
    </tr>
    @endforeach
  </tbody>
</div>
</table>

@endsection()