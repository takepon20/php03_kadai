<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

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

<main>
 <form method="" action="insert.php">
    <label>name       ：<input type="text" name="name" value=""></label><br>
    <label>nationality：<input type="text" name="nationality" value=""></label><br>
    <label>residence  ：<input type="text" name="residence" value=""></label><br>
    <label>sex        ：
        <input type="radio" name="men" value="">men</label>
        <input type="radio" name="women" value="">women</label><br>
    <label>age        ：<input type="number" name="age" value="age"></label><br>
   <label>introduction：<input type="text" name="introduction"></label><br>
   <input type="submit" value="save">
 </form>
</main>

<footer>Gs News</footer>

</body>
</html>