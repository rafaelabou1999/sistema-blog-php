<?php
include __DIR__ . '/../inc/functions.inc.php';
$is_blog = true;
$title = null;
$isHome = false; 

if(isset($_GET['title'])){
    $title = $_GET['title'];
    $posts = [
        "Ainda estou aqui" => "../../public/assets/ainda-estou-aqui.webp",
        "Wicked" => "../../public/assets/wicked.jpeg",
        "Duna 2" => "../../public/assets/duna-2.png",
        "A subtância" => "../../public/assets/substancia.jpg",
    ]; 

    if(array_key_exists($title, $posts)) $image = $posts[$title];  
} 

$sinopse = [
    "Ainda estou aqui" => "\"Ainda Estou Aqui\" é um filme brasileiro que narra a história de Eunice Paiva, uma mulher que precisa recomeçar sua vida após o desaparecimento de seu marido, Rubens Paiva, durante a ditadura militar brasileira.\nA trama se passa no início da década de 1970, um período marcado pela repressão e pelo medo. Eunice, até então uma dona de casa dedicada, vê sua rotina completamente transformada quando Rubens é levado por agentes do regime militar. A partir desse momento, ela se vê obrigada a enfrentar a dura realidade da ausência e da incerteza sobre o destino de seu amado.\nCom a casa repleta de memórias e o futuro incerto, Eunice inicia uma jornada em busca da verdade sobre o desaparecimento de Rubens. A dor da perda se mistura com a luta por justiça, e a mulher, antes frágil, se transforma em uma ativista incansável. Ela se junta a outros familiares de desaparecidos políticos, buscando respostas e denunciando as atrocidades cometidas pelo regime militar.\nO filme retrata com sensibilidade e realismo o impacto da ditadura militar na vida de uma família comum. Através da história de Eunice, o público é convidado a refletir sobre as consequências da violência política, a importância da memória e a luta por direitos humanos. A narrativa, baseada no livro autobiográfico de Marcelo Rubens Paiva, filho de Eunice, emociona e comove ao mostrar a força e a resiliência de uma mulher que, mesmo diante da adversidade, nunca desistiu de buscar a verdade.",
    "Wicked" => "Wicked conta a história não autorizada de Elphaba, a Bruxa Malvada do Oeste, e Glinda, a Bruxa Boa, antes de se tornarem rivais. Na Universidade de Shiz, as duas bruxas estudantes inicialmente se odeiam, mas acabam formando uma improvável amizade. Elphaba, diferente e incompreendida, possui poderes mágicos incomuns, enquanto Glinda é popular e adorada por todos.\nA trama se desenrola enquanto as duas enfrentam desafios e descobrem mais sobre si mesmas e o mundo ao seu redor. Elphaba se envolve em uma luta contra a injustiça e a opressão, defendendo os direitos dos animais e lutando contra a corrupção do governo. Enquanto isso, Glinda aprende a ser mais empática e a entender as dificuldades enfrentadas por aqueles que são diferentes.\nA amizade entre Elphaba e Glinda é testada por diversos obstáculos, incluindo a crescente popularidade de Elphaba como uma figura revolucionária e as exigências políticas que as colocam em lados opostos. A história explora temas como preconceito, amor, amizade, coragem e a importância de defender o que se acredita, mesmo diante da adversidade.\nWicked é um musical cativante com músicas memoráveis e uma mensagem poderosa sobre a importância da aceitação e da compreensão. A história subverte a narrativa tradicional de \"O Mágico de Oz\", oferecendo uma perspectiva única e fascinante sobre os personagens e o mundo mágico que eles habitam.",
    "Duna 2" => "Paul Atreides, agora conhecido como o Muad'Dib, lidera uma rebelião contra o Império Harkonnen, buscando vingança pela destruição de sua família e casa. Transformado pelo Deserto de Arrakis e abençoado pela profecia, Paul emerge como um líder espiritual e militar, unindo os Fremen em sua luta pela liberdade. No entanto, o poder absoluto corrompe, e Paul começa a abraçar um destino sombrio, predestinado a se tornar o tirano galáctico que ele jurou destruir.\nAcompanhamos a ascensão de Paul ao poder, enquanto ele enfrenta desafios internos e externos. Sua visão do futuro, baseada nas visões de sua Bene Gesserit, torna-se cada vez mais opressora, ameaçando a liberdade que tanto lutou para conquistar. A relação entre Paul e sua amada Chani é testada pelos eventos traumáticos e pelo peso da profecia.\nDuna: Parte Dois explora temas como poder, destino, liberdade e o preço da liderança. O filme mergulha ainda mais na mitologia e misticismo do universo criado por Frank Herbert, apresentando novas criaturas, tecnologias e intrigas políticas.",
    "A substância" => "\"A Substância\" é um thriller de ficção científica que gira em torno de uma descoberta científica revolucionária. Em um futuro não muito distante, um grupo de cientistas descobre uma substância misteriosa capaz de alterar a realidade e os pensamentos das pessoas. Inicialmente, a substância é vista como a solução para muitos dos problemas da humanidade, desde doenças incuráveis até questões psicológicas. No entanto, à medida que os testes avançam, os cientistas percebem que a substância tem efeitos colaterais perigosos e pode ser usada como uma arma poderosa.\nO protagonista, Dr. Júlio Mendes, é um dos principais pesquisadores envolvidos no projeto e enfrenta um dilema ético. Quando ele descobre que a substância está sendo usada para manipular as mentes das pessoas para fins políticos e militares, ele decide expor a verdade ao mundo. Mas essa decisão coloca sua vida e a vida de seus entes queridos em perigo, e ele precisa encontrar uma maneira de desmascarar os responsáveis sem se tornar uma vítima.\nEnquanto Dr. Mendes luta para revelar a verdade, ele encontra aliados inesperados e descobre segredos sombrios sobre a origem da substância. A trama se desenrola em um ritmo acelerado, com reviravoltas e momentos de alta tensão, levando o público a questionar a linha tênue entre ciência e moralidade. \"A Substância\" é uma obra instigante que aborda questões profundas sobre o poder, a ética e as consequências das descobertas científicas."

]


?>

<?php
    $path_to_display = "../../public/index.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/blog.css" rel="stylesheet">
    <link href="../../public/css/geral.css" rel="stylesheet">
    <title><?php echo $title ?></title>
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
        
                <?php   foreach ($sinopse AS $title_s => $text){
                            if($title_s === $title){
                                $text_array = explode("\n", $text);
                            } 
                        }   
                ?>
                <?php foreach ($text_array AS $paragraph):?>
                     <p class="sinopse"><?= e($paragraph)?></p><br>
                <?php endforeach; ?>
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
    </div> 
<?php endif; ?>
</body>


</html>