<!DOCTYPE html>
<?php
$id = $_GET['id'];

require_once('funcs.php');
$pdo = news_conn();


//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM kadai_news WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    // 成功した場合
    $result = $stmt->fetch();
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<!-- ヘッター -->
<header>
    <h2>News Post</h2>
    <!-- グローバルメニュー -->
    <nav>
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="follow.php">follow</a></li>
            <li><a href="post.php">post</a></li>
            <li><a href="profile.php">profile</a></li>
        </ul>
    </nav>
 </header>
<!-- メイン -->
<main>
 <form method="POST" action="update_news.php">
    <div class="jumbotron">
     <label>Title：   <input type="text" name="title"      value=" <?= $result['title']  ?>"></label><br>
     <label>Category：<input type="text" name="category"   value=" <?= $result['category']  ?>"></label><br>
     <label>Url：     <input type="text" name="url"        value=" <?= $result['url']  ?>"></label><br>
     <input type="hidden"                name="id"         value=" <?= $result['id'] ?>">
     <input type="submit" value="update">
    </div>
 </form>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>