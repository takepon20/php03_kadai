<!DOCTYPE html>
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
<main>
 <h4>Submit an article</h4>
 <form method="POST" action="insert_news.php">
    <div class="jumbotron">
     <label>title：   <input type="text" name="title"></label>
     <label>category：<input type="text" name="category"></label>
     <label>url：     <input type="text" name="url"></label>
     <input type="submit" value="post">
    </div>
 </form>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>