<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍データ登録アプリ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="b_list_view.php">書籍データ一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="u_index.php">ユーザー登録</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="u_list_view.php">ユーザー一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="b_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>書籍データ登録</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>書籍URL：<input type="text" name="url"></label><br>
     <label>書籍コメント：<input type="text" name="comment"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
