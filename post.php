<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<!-- ヘッター -->
<header>
    <h2>News Post</h2>
    <!-- グローバルメニュー -->
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="follow.php">follow</a></li>
            <li><a href="post.php">post</a></li>
            <li><a href="profile.php">profile</a></li>
        </ul>
    </nav>
 </header>
<!-- メイン -->
<main>
 <form method="" action="insert.php">
   <label>Category：
    <input type="radio" name="category" value="trend">trend
    <input type="radio" name="category" value="opinion">opinion
    <input type="radio" name="category" value="culture">culture
    <input type="radio" name="category" value="policy">policy
   </label><br>
   <label>Url：<input type="text" name="url"></label><br>
   <label>Title：<input type="text" name="title"></label><br>
   <label>excerpt：<input type="text" name="excerpt"></label><br>

   <input type="submit" value="post">
 </form>
</main>

<footer class="footer">Gs News</footer>

</body>
</html>