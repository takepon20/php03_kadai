<?php
// 記事を投稿する
// POSTデータを取得
$name        = $_POST['name'];
$nationality = $_POST['nationality'];
$residence   = $_POST['residence'];
$sex         = $_POST['sex'];
$age         = $_POST['age'];
$id_person   = $_POST['id_person'];


// DBに接続する関数
require_once('funcs.php');
$pdo = person_conn();

// データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
        kadai_person(
            name,nationality,residence,sex,age,indate
            )
            VALUES (
             :name, :nationality, :residence, :sex, :age, sysdate()
            );'
);

// 数字の場合INT 文字の場合STR
$stmt->bindValue(':name',        $name,        PDO::PARAM_STR);
$stmt->bindValue(':nationality', $nationality, PDO::PARAM_STR);
$stmt->bindValue(':residence',   $residence,   PDO::PARAM_STR);
$stmt->bindValue(':sex',         $sex,         PDO::PARAM_STR);
$stmt->bindValue(':age',         $age,         PDO::PARAM_INT);

$status = $stmt->execute(); //実行

// データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: profile.php');
    exit();
}

?>