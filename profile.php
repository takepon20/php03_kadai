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
 <h4>Please enter your profile</h4>
 <form method="POST" action="insert_person.php">
    <label>name       ：<input type="text"   name="name"         value=""></label>
    <label>nationality：<input type="text"   name="nationality"  value=""></label>
    <label>residence  ：<input type="text"   name="residence"    value=""></label>
    <label>sex        ：<input type="text"   name="sex"          value=""></label>
    <label>age        ：<input type="number" name="age"          value=""></label>
    <label>introduction：<input type="text"  name="introduction" value=""></label>
   <input type="submit" value="save">
 </form>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>