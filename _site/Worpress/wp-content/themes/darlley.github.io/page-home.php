<?php
    //Template Name: Home
    get_header();
?>

<header id="menu" class="background">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/perfil.jpg" alt="minha imagem">
      <div style="padding: .5em;">
          <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php the_field('home_titulo_botao'); ?>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php the_field('home_link_opcao1'); ?>"><?php the_field('home_botao_opcao1'); ?></a>
            <a class="dropdown-item" href="./portfolio.html"><?php the_field('home_botao_opcao2'); ?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://www.facebook.com/darlley.bbf" target="_blank"><?php the_field('home_botao_opcao3'); ?></a>
            <a class="dropdown-item" href="https://twitter.com/darlley_brito" target="_blank"><?php the_field('home_botao_opcao4'); ?></a>
            <a class="dropdown-item" href="https://www.instagram.com/darlleybbf/" target="_blank"><?php the_field('home_botao_opcao5'); ?></a>
          </div>
        </div>

      </div>
      <div class="msg-boasvindas">
        <h1><?php the_field('home_mensagem'); ?></h1>
      </div>
</header>
<script>
function typeWriter(elemento){
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
        setTimeout(() => elemento.innerHTML += letra, 75 * i)
    });
};
const titulo = document.querySelector('h1');
typeWriter(titulo);
</script>


<section id="servicos">
<h2><?php the_field('home_titulo1'); ?></h2>
    <a href="https://github.com/Darlley" target="_blank"><img src="https://img.icons8.com/clouds/2x/github.png" alt="configurações"></a>
<p><?php the_field('home_descricao1'); ?></p>
<p style="padding: 1em;"><a class="btn btn-primary" href="./servicos.html"><b>VER MAIS</b></a></p>
<div class="divisor-black"></div>
</section>

<section id="portfolio">
<h2><?php the_field('home_titulo2'); ?></h2>
<div class="container">
    <div class="box-icon">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-html.png">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-css.png">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-jswhite.png">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-bstrap.png">
    </div>
    <div class="box-icon">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-java.png">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-mvc.png">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-oop.png">
        <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/icon-python.png">
    </div>
</div>
<div class="msg-certificado">
    <?php the_field('home_descricao2'); ?>
</div>
<p><a class="btn btn-primary" href="./portfolio.html"><b>VER MAIS</b></a></p>
</section>

<?php get_footer(); ?>
