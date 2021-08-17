@extends('layouts.app')

@section('content')

<div class="container pt-3">
<table class="table">
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
      <td>{{$value->categories->getData()}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->message}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection()