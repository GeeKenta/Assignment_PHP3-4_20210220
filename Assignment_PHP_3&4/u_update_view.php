<?php

require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM user_table WHERE id = ' . $id . ';');
$status = $stmt->execute();


//３．データ表示
if ($status == false) {
    sql_error($status);
} else {
    $row = $stmt->fetch();
}

?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー情報更新<</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="b_list_view.php">書籍データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="u_update.php">
  <div class="jumbotron">
  <fieldset>
    <legend>ユーザー情報更新</legend>
     <label>ユーザー名：<input type="text" name="u_name" value="<?= $row['u_name'] ?>"></label><br>
     <label>ID：<input type="text" name="lid" value="<?= $row['lid'] ?>"></label><br>
     <label>PW：<input type="text" name="lpw" value="<?= $row['lpw'] ?>"></label><br>
     <label>管理者：<input type="text" name="kanri_flag" value="<?= $row['kanri_flag'] ?>"></label><br>
     <label>使用状況：<input type="text" name="life_flag" value="<?= $row['life_flag'] ?>"></label><br>
     <input type="hidden" name="id" value=<?= $row['id'] ?>>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>
