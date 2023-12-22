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
 <h4>detail</h4>
 <form method="POST" action="insert_person.php">
    <label>name        ： <?php echo $result['name'];        ?></label><br>
    <label>nationality ： <?php echo $result['nationality']; ?></label><br>
    <label>residence   ： <?php echo $result['residence'];   ?></label><br>
    <label>sex         ： <?php echo $result['sex'];         ?></label><br>
    <label>age         ： <?php echo $result['age'];         ?></label><br>
    <label>introduction： <?php echo $result['introduction'] ?></label><br>
   <input type="submit" value="follow">
 </form>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>