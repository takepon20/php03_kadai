<?php
// 記事を投稿する
// POSTデータを取得
$category    = $_POST['category'];
$url         = $_POST['url'];
$title       = $_POST['title'];
$excerpt     = $_POST['excerpt'];
$id_news     = $_POST['id_news'];

// DBに接続する関数
require_once('funcs.php');
$pdo = news_conn();

// データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
        kadai_news(
              category,  url,  title,  excerpt, indate
            )
            VALUES (
             :category, :url, :title, :excerpt, sysdate()
            );'
);

// 数字の場合INT 文字の場合STR
$stmt->bindValue(':category',$category,PDO::PARAM_STR);
$stmt->bindValue(':url',     $url,     PDO::PARAM_STR);
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);
$stmt->bindValue(':excerpt', $excerpt, PDO::PARAM_STR);

$status = $stmt->execute(); //実行

// データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: home.php');
    exit();
}

?>