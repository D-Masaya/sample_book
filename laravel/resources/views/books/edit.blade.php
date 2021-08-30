@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 align-self-center ">
            <!-- 投稿フォーム -->
            <div class="card border-dark mb-3">
                <div class="card-header">おすすめの本を投稿</div>
                <div class="card-body text-dark">
                    <form method="post" action="{{route('books.update', ['book'=>$book->id])}}" enctype="multipart/form-data">
                        @csrf()
                        @method('put')
                        <div class="form-group row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">タイトル</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputTitle" placeholder="タイトル" value="{{$book->name}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">ジャンル</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="exampleFormControlSelect1" name='category_id'>
                                    @foreach ($categories as $category)
                                    <?php
                                    if ($book->category_id == $category->id) {
                                    ?>
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    <?php
                                    }
                                    ?>
                                    @endforeach
                                </select>
                                <!-- エラー表示 -->
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputBody" class="col-sm-3 col-form-label">感想</label>
                            <div class="col-sm-9">
                                <textarea name="message" class="form-control" id="inputBody" placeholder="内容を入力してください。" rows="10">{{$book->message}}</textarea>
                            </div>
                        </div>
                        <!-- 本の画像登録フォーム -->
                        <div class="form-group row">
                            <label for="inputBody" class="col-sm-3 col-form-label">本の画像</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input name="file" type="file" class="custom-file-input" id="inputGroupFile03">
                                    <label class="custom-file-label" for="inputGroupFile03">本の画像</label>
                                    @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <img src="{{route('image', ['path'=>$book->photo])}}"width="200" />
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