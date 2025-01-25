<?php
include_once __DIR__ . '/../inc/functions.inc.php';

$is_views = true;
include __DIR__ . '/../inc/posts_info.inc.php';

session_start();
$_SESSION['title'] = $_GET['title'];

$is_blog = true;
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
    if (isset($post['title']) && trim($post['title']) === $_SESSION['title']) {
        $found = true;
        switch ($_SESSION['title']) {
            case $post['title']:
                include __DIR__ . "/../inc/Header.inc.php"; ?>
                <div class="has_title">
                    <div class="path_display"><a href="../../public/index.php">Home</a> 🢚 <span>Blog</span></div>
                    <div class="img_banner">
                        <div class="title_box">
                            <h1 class="blog_title"><?= e($post['title']) ?></h1>
                            <form action="list.php" method="POST">
                                <input type="hidden" name="title" value="<?= $_SESSION['title']; ?>" />
                                <input type="submit" class="watchlist_btn" value="Salvar"/>
                            </form>
                        </div>
                
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