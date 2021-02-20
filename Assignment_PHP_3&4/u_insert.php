<?php
//1. POSTデータ取得
$u_name   = $_POST["u_name"];
$lid  = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flag = $_POST["kanri_flag"];
$life_flag = $_POST["life_flag"];

require_once("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO user_table(u_name,lid, lpw, kanri_flag, life_flag)VALUES(:u_name,:lid, :lpw, :kanri_flag, :life_flag)");
$stmt->bindValue(':u_name', $u_name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flag', $kanri_flag, PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flag', $life_flag, PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    //*** function化する！*****************
    header("Location: u_list_view.php");
    exit();
}
?>