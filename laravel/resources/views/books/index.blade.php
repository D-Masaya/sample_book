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
      <th scope="col">本の画像</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $value)
    <tr>
      <th scope="row">{{$value->user->name}}</th>
      <td>{{$value->category->name}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->message}}</td>
      <td>
        <img src="http://127.0.0.1:8000/image?path=books/UnyfjCu2LbaGCRoNgiy3o10VEkZdsSnLxqEvJGdy.jpg" alt="" width="200"/>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection()