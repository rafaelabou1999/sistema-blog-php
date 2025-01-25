<?php 
$is_views = true;
$is_blog = true;
session_start();

include __DIR__ . '/../inc/functions.inc.php';
include __DIR__ . '/../inc/posts_info.inc.php';
include __DIR__ . '/../inc/db-connect.inc.php';

$pdo = new PDO('mysql:host=localhost;dbname=watchlist', 'root', 1234);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!empty($_SESSION['title'])){
    $count = $pdo->prepare('SELECT COUNT(*) as count FROM movie WHERE title = :title');
    $count->bindValue(':title', $_SESSION['title']);
    $count->execute();
    $results_count = $count->fetch(PDO::FETCH_ASSOC);
    $count_value = (int) $results_count['count'];
    
    if($count_value === 0){
        $stmt = $pdo->prepare('INSERT INTO movie (`title`) VALUES (:title)');
        $stmt->bindValue(':title', $_SESSION['title']);
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   
}



$stmt2 = $pdo->prepare('SELECT * FROM movie');
$stmt2->execute();
$rows = $stmt2->fetchAll(PDO::FETCH_ASSOC);
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/geral.css" rel="stylesheet"/>
    <link href="../../public/css/list.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    
<?php include __DIR__ . '/../inc/Header.inc.php'?>
<div class="list_box">
    <h3>Minha Lista</h3>
        <div class="movies" >
            <?php foreach ($rows AS $row):?>
                <div class="each_movie" id="<?= e($row['id']) ?>">
                    <h5><?= $row['title'] ?></h5>
                    <form id="delete-form" method="POST" action="../inc/db-delete-movie.inc.php" >
                       <input type="hidden" name="id" value="<?= e($row['id']) ?>"/>
                    </form>
                    <button type="submit">Deletar</button>
                </div>   
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../inc/Footer.inc.php'?>
<script>
    let btns =document.querySelectorAll('button');
    let movies = document.querySelectorAll('.each_movie');
    let movieId = document.querySelector("input[name='id']");
    btns.forEach((btn) => {
        btn.addEventListener('click', function deleteMovie(e){
            if(e.target){
                const movie = e.target.closest('.each_movie');
                movieId.value = movie.getAttribute('id');
                document.getElementById('delete-form').submit();

                if(movie){
                    movie.style.display = 'none';
                }
            }
        })
    })
    
    
</script>
</body>
</html>

