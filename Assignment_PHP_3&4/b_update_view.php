<?php

require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM bm_table WHERE id = ' . $id . ';');
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
  <title>書籍データ情報更新</title>
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
<form method="POST" action="b_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>書籍データ登録</legend>
     <label>書籍名：<input type="text" name="name" value="<?= $row['name'] ?>"></label><br>
     <label>書籍URL：<input type="text" name="url"  value="<?= $row['url'] ?>"></label><br>
     <label>書籍コメント：<input type="text" name="comment"  value="<?= $row['comment'] ?>"></label><br>
     <input type="hidden" name="id" value=<?= $row['id'] ?>>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>
