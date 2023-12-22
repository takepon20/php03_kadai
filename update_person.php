<?php

//1. POSTデータ取得
$name        = $_POST['name'];
$nationality = $_POST['nationality'];
$residence   = $_POST['residence'];
$sex         = $_POST['sex'];
$age         = $_POST['age'];
$introduction= $_POST['introduction'];
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
   kadai_person 
   SET 
   name = :name, nationality = :nationality, residence = :residence, sex = :sex, age = :age, introduction = :introduction, indate = sysdate() 
   Where id=:id; ');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name',          $name,        PDO::PARAM_STR);
$stmt->bindValue(':nationality',   $nationality, PDO::PARAM_STR);
$stmt->bindValue(':residence',     $residence,   PDO::PARAM_STR); 
$stmt->bindValue(':sex',           $sex,         PDO::PARAM_STR);
$stmt->bindValue(':age',           $age,         PDO::PARAM_INT);
$stmt->bindValue(':id',            $id,          PDO::PARAM_INT);
$stmt->bindValue(':introduction',  $introduction,PDO::PARAM_STR);

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