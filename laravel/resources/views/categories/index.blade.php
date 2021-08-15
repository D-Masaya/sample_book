@extends('layouts.app')

@section('content')

<div class="container pt-3">
<table class="table">
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
</table>
</div>

 @endsection()