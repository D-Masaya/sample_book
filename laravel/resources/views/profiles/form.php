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
    <div class="row justify-content-center">
        <div class="col-sm-12 align-self-center ">
            <!-- プロフィール -->
            <div class="card border-dark mb-3">
                <div class="card-header">プロフィール</div>
                <div class="card-body text-dark">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <td><?php echo $user['id']; ?></td>
                        </tr>
                        <tr>
                            <th>名前</th>
                            <td><?php echo $user['name']; ?></td>
                        </tr>
                        <tr>
                            <th>登録日</th>
                            <td><?php echo $user['created_at']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 align-self-center ">
            <!-- 自己紹介 -->
            <div class="card border-dark mb-3">
                <div class="card-header">自己紹介</div>
                <div class="card-body text-dark">
                    <table class="table">
                        <tr>
                            <th>好きなジャンル</th>
                            <td><input type="text" placeholder="好きなジャンル"></td>
                        </tr>
                        <tr>
                            <th>好きな本</th>
                            <td><input type="text" placeholder="好きな本"></td>
                        </tr>
                        <tr>
                            <th>メッセージ</th>
                            <td><textarea cols="30" rows="10"></textarea></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
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