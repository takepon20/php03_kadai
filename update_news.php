<?php

//1. POSTデータ取得
$title       = $_POST['title'];
$category    = $_POST['category'];
$url         = $_POST['url'];
$excerpt     = $_POST['excerpt'];
$id          = $_POST['id'];

//2. DB接続します
//*** function化する！  *****************
try {
    $db_name = 'gs_db'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare(
  'UPDATE 
   kadai_news 
   SET 
   title = :title, category = :category, url = :url, excerpt = :excerpt, date = sysdate() 
   Where id=:id; ');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':title',       $title,   PDO::PARAM_INT);
$stmt->bindValue(':category',    $category,PDO::PARAM_STR);
$stmt->bindValue(':url',         $url,     PDO::PARAM_STR);
$stmt->bindValue(':excerpt',     $excerpt, PDO::PARAM_STR);
$stmt->bindValue(':id',          $id,      PDO::PARAM_INT);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    // redirect()
    header('Location: $file_name');
    exit();
}

?>