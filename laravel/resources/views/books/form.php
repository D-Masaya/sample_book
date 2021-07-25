<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>sample book</title>
</head>

<body>
    <!-- ナビゲーションバー -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./">sample book</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (isset($_SESSION['id'])) {
            ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php">プロフィール</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./bbs.php">掲示板</a>
                </li>
            </ul>
            
            <?php
            }

            if (!isset($_SESSION['id'])) {
            ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./register.php">新規登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">ログイン</a>
                </li>
            </ul>
            <?php } 
            
            if (isset($_SESSION['id'])) {
                ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">ログアウト</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>

<!-- メイン -->
<div class="container pt-3">
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
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">投稿</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>