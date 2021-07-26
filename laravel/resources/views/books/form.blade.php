@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 align-self-center ">
            <!-- 投稿フォーム -->
            <div class="card border-dark mb-3">
                <div class="card-header">おすすめの本を投稿</div>
                <div class="card-body text-dark">
                    <form method="post" action="">
                        <div class="form-group row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="タイトル" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">ジャンル</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="タイトル" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputBody" class="col-sm-3 col-form-label">感想</label>
                            <div class="col-sm-9">
                                <textarea name="body" class="form-control" id="inputBody" placeholder="内容を入力してください。" rows="10" required></textarea>
                            </div>
                        </div>
                        <!-- 本の画像登録フォーム -->
                        <div class="form-group row">
                            <label for="inputBody" class="col-sm-3 col-form-label">本の画像</label>
                            <div class="col-sm-9">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="inputGroupFile03">
                                <label class="custom-file-label" for="inputGroupFile03">本の画像</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection()