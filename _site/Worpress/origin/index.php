<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="content-language" content="pt">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Darlley" lang="pt" content="Darlley Brasil de Brito Furtado">
		<meta name="description" content="Procurando alguém que construa sites ou blogs? Posso te ajudar, venha comigo!">
		<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico"/>
		<title><?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php get_stylesheet_uri(); ?>/normalize.css">
		<link rel="stylesheet" href="<?php get_stylesheet_uri(); ?>/style.css">
											
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	</head>
  	<body>
	
	<div class="pos-f-t">
		<div class="collapse" id="navbarToggleExternalContent">
        	<ul class="nav bg-dark p-2">
          		<li class="nav-item">
            		<a class="nav-link active text-white" href="#"><b>HELLO WORLD</b></a>
          		</li>
          		<li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
            		<div class="dropdown-menu bg-dark">
              			<a class="dropdown-item bg-dark text-white" href="./sobre.html">Sobre mim</a>
              			<a class="dropdown-item bg-dark text-white" href="./servicos.html">Projetos</a>
              			<a class="dropdown-item bg-dark text-white" href="./portfolio.html">Conhecimentos</a>
              			<a class="dropdown-item bg-dark text-white" href="./blog.html">Blog</a>
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
	      		<div class="mensagem">
				<marquee style="color: #fff;">Seja bem vindo, o site ainda esta em construção, porém o que ja foi produzido esta funcional e pode ser visitado sem grandes transtornos, espero que goste :)</marquee>
			</div>
      </nav>
										 
	<header id="menu" class="background">
      
	      <img src="imagens/perfil.jpg" alt="minha imagem">
	      <div style="padding: 1em;">
		      <div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    QUEM SOU
			  </button>
			  <div class="dropdown-menu">
			    <a class="dropdown-item" href="./sobre.html">Biografia</a>
			    <a class="dropdown-item" href="./portfolio.html">Currículo</a>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="https://www.facebook.com/darlley.bbf" target="_blank">Facebook</a>
			    <a class="dropdown-item" href="https://twitter.com/darlley_brito" target="_blank">Twitter</a>
			    <a class="dropdown-item" href="https://www.instagram.com/darlleybbf/" target="_blank">Instagram</a>
			  </div>
			</div>
	      </div>
	      <div class="msg-boasvindas">
			<h1>Seja bem vindo ao meu portfólio, conheça mais sobre mim e meu trabalho. Meu nome é Darlley e a sua visita ou parceria é muito importante para mim!</h1>
	      </div>
	</header>
	<script>
        function typeWriter(elemento){
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';
            textoArray.forEach(
                (letra, i) => {
                    setTimeout((

                    ) => elemento.innerHTML += letra, 75 * i)
                }
            );
        };
        const titulo = document.querySelector('h1');
        typeWriter(titulo);
    </script>
	    
	
    <section id="servicos">
	<h2>O QUE JA FIZ</h2>
        <a href="https://github.com/Darlley" target="_blank"><img src="https://img.icons8.com/clouds/2x/github.png" alt="configurações"></a>
	<p>Veja também o <i>desenvolvimento</i> de meus trabalhos em meus repositórios clicando sobre a imagem.</p>
	<p style="padding: 1em;"><a class="btn btn-primary" href="./servicos.html"><b>VER MAIS</b></a></p>
	<div class="divisor-black"></div>
    </section>
    
    <section id="portfolio">
	<h2>O QUE SEI FAZER</h2>
	<div class="container">
		<div class="box-icon">
			<img class="icon" src="imagens/icon-html.png">
			<img class="icon" src="imagens/icon-css.png">
			<img class="icon" src="imagens/icon-jswhite.png">
			<img class="icon" src="imagens/icon-bstrap.png">
		</div>
		<div class="box-icon">
			<img class="icon" src="imagens/icon-java.png">
			<img class="icon" src="imagens/icon-mvc.png">
			<img class="icon" src="imagens/icon-oop.png">
			<img class="icon" src="imagens/icon-python.png">
		</div>
	</div>
	<div class="msg-certificado">
		<p>Veja minhas certificações e capacitações profissionais e intelectuais.</p>
	</div>
	<p><a class="btn btn-primary" href="./portfolio.html"><b>VER MAIS</b></a></p>
    </section>
    
    <footer>
      <p>Desenvolvido por <b>Darlley Brito</b>.</p>
    </footer>
							     
    </body>
</html>
