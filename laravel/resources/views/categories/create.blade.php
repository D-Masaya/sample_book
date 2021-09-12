@extends('layouts.app')

@section('content')

<div class="container-md">
<a class="btn btn-outline-secondary" href="{{route('categories.index')}}" role="button">カテゴリー一覧</a>
</div>
<!-- ジャンル記入欄 -->
<div class="container pt-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 align-self-center ">
            <!-- ジャンル登録 -->
            <div class="card border-dark mb-3">
                <div class="card-header">ジャンル登録</div>
                <div class="card-body text-dark">
                    <form method="POST" action="{{route('categories.store')}}">
                        @csrf()
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <tr>
                                        <th>カテゴリー名</th>
                                        <td>
                                            <input class="form-control" type="text" name="name" placeholder="カテゴリー名">
                                            <!-- エラー表示 -->
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <dic class="row">
                            <div class="col text-center">
                                <button class="btn btn-primary" type="submit">登録</button>
                            </div>
                        </dic>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()