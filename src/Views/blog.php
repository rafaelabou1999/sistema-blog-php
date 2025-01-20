<?php
include_once __DIR__ . '/../inc/functions.inc.php';

$is_blog = true;
include __DIR__ . '/../inc/posts_info.inc.php';

$title = $_GET['title'];
$isHome = false; 

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
<?php
$title = trim($_GET['title']);
$found = false;

foreach ($posts as $post) {
    if (isset($post['title']) && trim($post['title']) === $title) {
        $found = true;
        switch ($title) {
            case $post['title']:
                include __DIR__ . "/../inc/Header.inc.php"; ?>
                <div class="has_title">
                    <div class="path_display"><a href="../../public/index.php">Home</a> 🢚 <span>Blog</span></div>
                    <div class="img_banner">
                        <h1 class="blog_title"><?= e($post['title']) ?></h1>
                        <figure>
                            <img class="blog_banner" src="<?= e($post['image']);?>"/>
                            <figcaption>| Image by xyz</figcaption>
                        </figure>
                    </div>
                    <div class="line"></div>
                    <div class="sinopse_box">
                        <?php $text_array = explode("\n", $post['sinopse']); ?>
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
                <?php
                break;
            default:
                break;
        }
    }
}

if (!$found) {
    ?>
    <div class="post_error">
        <h4>Título não encontrado!</h4>
        <button><a href="../../public/index.php">Home</a></button>
    </div> 
    <?php
}
?>
</body>


</html>