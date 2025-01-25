<?php
include_once __DIR__ . '/../inc/functions.inc.php';
include __DIR__ . '/../inc/posts_info.inc.php';

$is_views = false;
$is_blog = false;
$posts_first = array_slice($posts, 0, -1, true);
$posts_second = array_slice($posts, -1, 1, true);

?>

<div class="all_posts">
    <div class="first_page">
        <?php foreach ($posts_first AS $post):?>
            <?php
                $movies = ['title' => $post['title']] ;
                $query = http_build_query($movies);
                $url = "../src/Views/blog.php?" . $query;
            ?>
            <div class="post">
                <img class="post_card_img" src="<?= e($post['image']);?>"/>
                <div class="right_part_card">
                    <h3 class="post_card_title"><?= e($post['title']); ?></h3>  
                    <h4 class="genero">★★★★★</h4> 
                    <p><?php echo substr($post['sinopse'], 0 ,250);?>...</p>     
                    <button class="post_card_btn" onclick="window.location.href='<?= $url ?>'">Leia mais</button>
                </div>
            
            </div>
        <?php endforeach; ?>
    </div>
      
    <div class="second_page">
        <?php foreach ($posts_second AS $post):?>
            <?php
                $movies = ['title' => $post['title']] ;
                $query = http_build_query($movies);
                $url = "../src/Views/blog.php?" . $query;
             ?>
            <div class="post">
                <img class="post_card_img" src="<?= e($post['image']);?>"/>
                <div class="right_part_card">
                <h3 class="post_card_title"><?= e($post['title']); ?></h3>  
                <h4 class="genero">★★★★★</h4> 
                <p><?php echo substr($post['sinopse'], 0 ,250);?>...</p>     
                <button class="post_card_btn" onclick="window.location.href='<?= $url ?>'">Leia mais</button>
             </div>
            </div>
        <?php endforeach; ?>
       </div>
    </div>
    <div class="pages">
        <div class="page first_page" id="first_page">1</div>
        <div class="page second_page" id="second_page">2</div>
    </div>
    <script src="../public/js/script.js"></script>