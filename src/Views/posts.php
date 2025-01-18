<?php
include __DIR__ . '/../inc/functions.inc.php';

$first_posts = [
    "Ainda estou aqui" => "../public/assets/ainda-estou-aqui.webp",
    "Wicked" => "../public/assets/wicked.jpeg",
    "Duna 2" => "../public/assets/duna-2.png",
];

$second_posts = [
    "A subtância" => "../public/assets/substancia.jpg",
];
?>

<div class="all_posts">
    <div class="first_page">
        <?php foreach ($first_posts AS $title => $image):?>
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
      
    <div class="second_page">
        <?php foreach ($second_posts AS $title => $image):?>
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
    </div>
    <div class="pages">
        <div class="page first_page" id="first_page">1</div>
        <div class="page second_page" id="second_page">2</div>
    </div>
    <script src="../public/js/script.js"></script>