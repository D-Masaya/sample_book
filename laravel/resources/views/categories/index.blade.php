@extends('layouts.app')

@section('content')

<table class="table">
<div class="container">
  <thead>
    <tr>
      <th scope="col">ジャンルID</th>
      <th scope="col">本のジャンル</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->name}}</td>
    </tr>
    @endforeach
  </tbody>
</div>
</table>

 @endsection()