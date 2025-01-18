<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/geral.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<header>
    <h4 class="logo"><a href="<?= $is_blog ? "../../public/index.php" : "./index.php" ?>">CineLuzes</a></h4>
    <div class="user">
        <img class="img_user" src="<?= $is_blog ? "../../public/assets/profile-user.jpeg" : "./assets/profile-user.jpeg" ?>"/>
        <div class="user_info">
            <div class="username">User</div>
            <div class="logout">Logout</div>
        </div>  
    </div>
</header>