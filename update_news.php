<?php

//1. POSTデータ取得
$title       = $_POST['title'];
$category    = $_POST['category'];
$url         = $_POST['url'];
$excerpt     = $_POST['excerpt'];

//2. DB接続します
//*** function化する！  *****************
try {
    $db_name = 'kadai_news'; //データベース名
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
   category = :category,url = :url,title = :title,excerpt = :excerpt,indate = sysdate() 
   Where id_news=:id_news; ');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':category',    $name,    PDO::PARAM_STR);
$stmt->bindValue(':url',         $email,   PDO::PARAM_STR);
$stmt->bindValue(':title',       $age,     PDO::PARAM_INT); //PARAM_INTなので注意
$stmt->bindValue(':excerpt',     $content, PDO::PARAM_STR);
$stmt->bindValue(':id_news',     $id,      PDO::PARAM_INT);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    redirect()
}

?>