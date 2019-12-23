<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo('charset'); ?>>
	<meta http-equiv="content-language" content="pt">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Darlley" lang="pt" content="Darlley Brasil de Brito Furtado">
	<meta name="description" content="Procurando alguém que construa sites ou blogs? Posso te ajudar, venha comigo!">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imagens/favicon.ico"/>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/normalize.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<?php wp_head(); ?>

</head>
<body>

	<div class="pos-f-t">
		<div class="collapse" id="navbarToggleExternalContent">
        	<ul class="nav bg-dark p-2">
          		<li class="nav-item">
            		<a class="nav-link active text-white" href="<?php echo get_permalink(7); ?>"><b>INÍCIO</b></a>
          		</li>
          		<li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
            		<div class="dropdown-menu bg-dark">
              			<a class="dropdown-item bg-dark text-white" href="/portfolio/sobre/">Sobre mim</a>
              			<a class="dropdown-item bg-dark text-white" href="/portfolio/projetos/">Projetos</a>
              			<a class="dropdown-item bg-dark text-white" href="/portfolio/portfolio/">Conhecimentos</a>
              			<a class="dropdown-item bg-dark text-white" href="/portfolio/blog/">Blog</a>
              			<div class="dropdown-divider"></div>
              			<a class="dropdown-item bg-dark text-white" href="https://github.com/Darlley/darlley.github.io" target="_blank">Código do portfólio</a>
              			<a class="dropdown-item bg-dark text-white" href="https://github.com/Darlley" target="_blank">Github</a>
            		</div>
          		</li>
        	</ul>
		<ul class="nav bg-dark p-2" style="text-align: center; justify-content: center;">
					<li class="nav-item" style="max-width: 49%; padding: 1em;">
						<img src="https://github.com/Darlley/darlley.github.io/blob/master/imagens/whatsapp.png?raw=true" alt="fone" style="width: 49%;">
        					<p style="padding: 0;" class="nav-link active text-white">+55 (67)</br>9 9332-8678</p>
					</li>
					<li class="nav-item" style="max-width: 49%; padding: 1em;">
						<img src="https://github.com/Darlley/darlley.github.io/blob/master/imagens/mail.png?raw=true" alt="email" style="width: 49%;">
        					<p style="padding: 0;" class="nav-link active text-white">darlleybrito</br>@gmail.com</p>
					</li>
				</ul>
      </div>
      <nav class="navbar navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
      </nav>
