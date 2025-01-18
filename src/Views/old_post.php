<?php
include __DIR__ . '/../inc/functions.inc.php';

$posts = [
    "Ainda estou aqui" => "../public/assets/ainda-estou-aqui.webp",
    "Wicked" => "../public/assets/wicked.jpeg",
    "Duna 2" => "../public/assets/duna-2.png",
];


?>

<div class="all_posts">
    <?php foreach ($posts AS $title => $image):?>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam qui, adipisci corrupti cupiditate unde doloribus quis? Maxime, exercitationem esse. Doloremque voluptates id eveniet aperiam eos ipsa fugiat molestiae molestias quibusdam!</p>     
                <button class="post_card_btn" onclick="window.location.href='<?= $url ?>'">Leia mais</button>
            </div>
           
        </div>
    <?php endforeach; ?>
</div>
