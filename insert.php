<?php

//1. POSTデータ取得
$action  = $_POST['action'];
$name  = $_POST['name'];
$content    = $_POST['content'];

//2. DB接続します
//*** function化する！  *****************
require_once('funcs.php');
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO gs_hw_0106_t(action, name, content, indate)
                        VALUES (:action, :name, :content, sysdate())');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':action', $action, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}
// if ($status === false) {
//     //*** function化する！******\
//     $error = $stmt->errorInfo();
//     exit('SQLError:' . print_r($error, true));
// } else {
//     //*** function化する！*****************
//     header('Location: index.php');
//     exit();
// }
