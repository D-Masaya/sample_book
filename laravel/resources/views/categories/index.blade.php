@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ジャンルID</th>
      <th scope="col">本のジャンル</th>
    </tr>
  </thead>
  <?php
  $items = \DB::table('categories')->get();
  ?>
  <tbody>
    @foreach($items as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->name}}</td>
    </tr>
    @endforeach
</table>

 @endsection()