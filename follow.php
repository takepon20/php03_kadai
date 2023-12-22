<?php

require_once('funcs.php');
$pdo = person_conn();

//２．データ登録SQL作成
$stmt   = $pdo ->prepare('SELECT * FROM kadai_person;');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= $result['name'] . '：' . $result['sex'] . '：' . $result['age']. '：' . $result['nationality']. '：' . $result['residence'];
        $view .= '</p>';

        $view .= '<p>';
        $view .= '<a href="profile_you.php?id=' . $result['id']. '">';
        $view .= '[detail]';  
        $view .= '</p>';    
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

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

<main>
  <div>
     <a href="profile_you.php"></a>
     <?= $view ?>
  </div>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>