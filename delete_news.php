<?php

$id_news = $_GET['id_news'];

require_once('funcs.php');
$pdo = news_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM kadai_news WHERE id_news = :id_news; ');
$stmt->bindValue(':id_news', $id_news, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
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