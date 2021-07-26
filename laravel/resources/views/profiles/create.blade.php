@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 align-self-center ">
            <!-- 自己紹介 -->
            <div class="card border-dark mb-3">
                <div class="card-header">自己紹介</div>
                <div class="card-body text-dark">
                    <form method="POST" action="{{route('profiles.store')}}">
                        @csrf()
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <tr>
                                        <th>好きな本</th>
                                        <td><input class="form-control" type="text" name="like_1"" placeholder=" 好きな本"></td>
                                    </tr>
                                    <tr>
                                        <th>好きなジャンル</th>
                                        <td><input class="form-control" type="text" name="like_2" placeholder="好きなジャンル"></td>
                                    </tr>
                                    <tr>
                                        <th>メッセージ</th>
                                        <td><textarea class="form-control" name="message" cols="30" rows="10"></textarea></td>
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