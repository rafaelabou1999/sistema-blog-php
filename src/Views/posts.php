<?php
include __DIR__ . '/../inc/functions.inc.php';
include __DIR__ . '/../inc/sinopse.inc.php';

$posts = [
    "Ainda estou aqui" => "../public/assets/ainda-estou-aqui.webp",
    "Wicked" => "../public/assets/wicked.jpeg",
    "Duna 2" => "../public/assets/duna-2.png",
    "A substância" => "../public/assets/substancia.jpg",
];

$posts_first = array_slice($posts, 0, -1, true);
$posts_second = array_slice($posts, -1, 1, true);

$sinopse_post = array_slice(array_values($sinopse), 0, 1, false);
?>

<div class="all_posts">
    <div class="first_page">
        <?php foreach ($posts_first AS $title => $image):?>
            <?php
                $movies = ['title' => $title];
                $query = http_build_query($movies);
                $url = "../src/Views/blog.php?" . $query;
            ?>
            <div class="post">
                <img class="post_card_img" src="<?= e($image);?>"/>
                <div class="right_part_card">
                    <h3 class="post_card_title"><?= e($title); ?></h3>  
                    <h4 class="genero">★★★★★</h4> 
                    <?php foreach ($sinopse AS $sinopse_title => $p):?>
                        <?php if ($title === $sinopse_title):?>
                            <p><?php echo substr($p, 0 ,250);?></p>     
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <button class="post_card_btn" onclick="window.location.href='<?= $url ?>'">Leia mais</button>
                </div>
            
            </div>
        <?php endforeach; ?>
    </div>
      
    <div class="second_page">
        <?php foreach ($posts_second AS $title => $image):?>
            <?php
                $movies = ['title' => $title];
                $query = http_build_query($movies);
                $url = "../src/Views/blog.php?" . $query;
             ?>
            <div class="post">
                <img class="post_card_img" src="<?= e($image);?>"/>
                <div class="right_part_card">
                <h3 class="post_card_title"><?= e($title); ?></h3>  
                <h4 class="genero">★★★★★</h4> 
                <?php foreach ($sinopse AS $sinopse_title => $p):?>
                        <?php if ($title === $sinopse_title):?>
                            <p><?php echo substr($p, 0 ,250);?></p>     
                        <?php endif; ?>
                <?php endforeach; ?>
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