<?php
function news_conn(){
    try {
        $db_name = 'gs_db'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
     return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
    }
}

// プロフィールDBに接続する
function person_conn(){
    try {
        $db_name = 'gs_db'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
     return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
    }
}

function redirect($file_name)
{
    header('Location: $file_name');
    exit();
}

?>
