<?php
// 記事を投稿する
// POSTデータを取得
$title       = $_POST['title'];
$category    = $_POST['category'];
$url         = $_POST['url'];

// DBに接続する関数
require_once('funcs.php');
$pdo = news_conn();

// データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
        kadai_news(
              title,  category,  url,  date
            )
            VALUES (
             :title, :category, :url,  sysdate()
            );'
);

// 数字の場合INT 文字の場合STR
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);
$stmt->bindValue(':category',$category,PDO::PARAM_STR);
$stmt->bindValue(':url',     $url,     PDO::PARAM_STR);

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