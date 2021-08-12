@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ユーザーID</th>
      <th scope="col">本のジャンル</th>
      <th scope="col">本のタイトル</th>
      <th scope="col">本の感想</th>
    </tr>
  </thead>
  <?php
  $items = \DB::table('books')->get();
  ?>
  <tbody>
    @foreach($items as $value)
    <tr>
      <th scope="row">{{$value->user_id}}</th>
      <td>{{$value->category_id}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->message}}</td>
    </tr>
    @endforeach
</table>

@endsection()