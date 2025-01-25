<?php global $is_blog ?>

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
    <h4 class="logo"><a href="<?= $is_views ? "../../public/index.php" : "./index.php" ?>">CineLuzes</a></h4>
    <div class="user">
        <h4><a href="<?= $is_blog ? './list.php' : '../src/Views/list.php' ?>" class="list_link">Minha Lista</a></h4>
        <img class="img_user" src="<?= $is_views ? "../../public/assets/profile-user.jpeg" : "./assets/profile-user.jpeg" ?>"/>
        <div class="user_info">
            <div class="username">User</div>
            <div class="logout">Logout</div>
        </div>  
    </div>
</header>