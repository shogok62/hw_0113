<?php

session_start();
require_once('funcs.php');
loginCheck();

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//1. POSTデータ取得
$action   = $_POST['action'];
$name  = $_POST['name'];
$content = $_POST['content'];
$id = $_POST['id']; // ←追加

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成

// UPDATE文にする
$stmt = $pdo->prepare( 'UPDATE gs_hw_0106_t SET action = :action, name = :name, content = :content, indate = sysdate()  WHERE id = :id;' );

$stmt->bindValue(':action', $action, PDO::PARAM_STR);/// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':content', $content, PDO::PARAM_STR);// 数値の場合 PDO::PARAM_INT
$stmt->bindValue(':id', $id, PDO::PARAM_INT);// 数値の場合 PDO::PARAM_INT
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: select.php');
    exit();
}

//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
