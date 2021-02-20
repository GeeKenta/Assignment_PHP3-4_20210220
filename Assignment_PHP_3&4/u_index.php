<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="b_list_view.php">書籍データ一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="u_list_view.php">ユーザー一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="u_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>ユーザー名：<input type="text" name="u_name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PW：<input type="text" name="lpw"></label><br>
     <label>管理者：<input type="text" name="kanri_flag"></label><br>
     <label>使用状況：<input type="text" name="life_flag"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
