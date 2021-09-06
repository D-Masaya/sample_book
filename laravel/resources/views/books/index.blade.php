@extends('layouts.app')

@section('content')

<div class="container pt-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ユーザー名</th>
        <th scope="col">本のジャンル</th>
        <th scope="col">本のタイトル</th>
        <th scope="col">本の感想</th>
        <th scope="col">本の画像</th>
        <th>編集</th>
        <th>削除</th>
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
          <img src="{{route('image', ['path'=>$value->photo])}}" alt="" width="200" />
        </td>
        <td><a href="{{route('books.edit', ['book'=>$value->id])}}"><button type="button" class="btn btn-warning">編集</button></a></td>
        <td><form method="POST" action="{{route('books.destroy', ['book'=>$value->id])}}">
        @csrf()
        @method('delete')
          <button class="btn btn-danger">削除</button>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection()