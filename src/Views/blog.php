<?php
include __DIR__ . '/../inc/functions.inc.php';
include __DIR__ . '/../inc/sinopse.inc.php';

$is_blog = true;
$title = null;
$isHome = false; 

if(isset($_GET['title'])){
    $title = $_GET['title'];
    $posts = [
        "Ainda estou aqui" => "../../public/assets/ainda-estou-aqui.webp",
        "Wicked" => "../../public/assets/wicked.jpeg",
        "Duna 2" => "../../public/assets/duna-2.png",
        "A substância" => "../../public/assets/substancia.jpg",
    ]; 

    if(array_key_exists($title, $posts)) $image = $posts[$title];  
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/blog.css" rel="stylesheet">
    <link href="../../public/css/geral.css" rel="stylesheet">
    <title><?= e($title) ?></title>
</head>
<body>
<?php if($title):?>
    <?php if(array_key_exists($title,$posts) && isset($posts[$title])):?>
        <?php include __DIR__ . "/../inc/Header.inc.php"?>
        <div class="has_title">
            <div class="path_display"><a href="../../public/index.php">Home</a> 🢚 <span>Blog</span></div>
            <div class="img_banner">
                <h1 class="blog_title"><?= e($title) ?></h1>
                <figure>
                    <img class="blog_banner" src="<?= e($image);?>"/>
                    <figcaption>| Image by xyz</figcaption>
                </figure>
            </div>
            <!--<div class="star">4.9</div>!-->
            <div class="line"></div>
            <div class="sinopse_box">
        
                <?php foreach ($sinopse AS $title_sinopse => $text){
                        if($title_sinopse === $title){
                            $text_array = explode("\n", $text);
                        } 
                    }   
                ?>

                <p class='sinopse'><?php echo join("</p><br><p class='sinopse'>", $text_array)?></p><br>
            </div>
            <div class="author_box">
                    <img class="author" src="../../public/assets/profile-user.jpeg"/>
                    <div>
                        <h4>Texto gerado por IA</h4>
                        <p>Jan 18, 2025</p>
                    </div>
                </div>
                
            <form action="blog.php">
                <div class="input_blog">
                    <label class="comment_title">Comentarios</label>
                    <input type="text" name="comment" class="comment">
                </div>
            </form>
            <div class="comment_section">
            <h5 class="comment_text">Filme maravilhoso!!!!!! Vale a pena assistir</h5>
            </div>
        </div> 
    <?php else: ?>
        <div class="post_error">
            <h4>Título não encontrado!</h4>
            <button><a href="../../public/index.php">Home</a></button>
        </div> 
    <?php endif; ?>
<?php else: ?>
    <div class="post_error">
        <h4>Erro. Url inválido!</h4>
        <button><a href="../../public/index.php">Home</a></button>
    </div> 
<?php endif; ?>
</body>


</html>