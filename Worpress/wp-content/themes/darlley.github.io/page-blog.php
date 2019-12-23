<?php
	// Template Name: Blog
	get_header(); 
?>			       
		<section id="blog">
			<div>
				<h1>ARTIGOS</h1>
				<p>Leia meus artigos, aqui você encontrará tutoriais, opiniões em tecnologia, filosofia, politica, etc. resenhas, análises e resumos de livros.</p>
			</div>

			<section class="artigos">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">QUE FILOSOFIA  VIDA APRENDI PROGRAMANDO</button>
					      		</h2>
					 	</div>
					 	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					      		<article class="card-body">
								<img class="card-img-top" src="imagens/blog/filosofiadev-capa.jpg">
                                				<p>Vida de programador pode ser muito divertida, mas as vezes a coisa é um inferno. Entrei agora, nem estou o mercado (é meu primeiro ano na faculdade em Tecnologia de Análise e Desenvolvimento de Sistemas), e não poderia dar piteco nenhum quanto a qualidade do código de alguém, mas percebi que programação pode te ensinar muitas coisas práticas, além de um programa, para a vida. Neste artigo irei contar quatro delas.</p>
								<p><b>1. Caso erro de compilação, não adianta se estressar, sua situação só mudará quando você tiver a paciência de procurar onde deu errado e concertar.</b></p>
								<img class="imagens-artigo" src="imagens/blog/filosofiadev/filosofiadev-1.jpg">
								<p>O mundo moderno permitiu que as pessoas transfiram para terceiros a responsabilidade pelos próprios problemas. Se você não resolver, o problema não se resolvera cedo, ou não se resolvera.</p>
								<p><b>REFERÊNCIAS</b></p>
								<p id="ref">1. <a href="">Primeira referência</a></br>
									2. <a href="">Segunda referência</a></p>
								<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
									<button class="fechar btn btn-outline-primary">Lido</button>
								</div>
    							</article>
					    	</div>
					</div>
					
					<div class="card">
					    <div class="card-header" id="headingOne">
					      <h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">GIT E GIT HUB</button>
					      </h2>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						<article class="card-body">
							<img class="card-img-top" src="imagens/blog/gitgithub.jpeg">
							<p>Git é uma ferramenta para controle de versionamento de código, muito útil para gerenciar o desenvolvimento, enquanto o github é um repositório para armazenamento de códigos. No artigo detalho as duas ferramentas.</p>
							<p><b>O QUE É CONTROLE DE VERSÃO</b></p>
							<p>Um sistema de controle de versão é um programa que registra as mudanças feitas em um arquivo ou um conjunto de arquivos ao longo do tempo de forma que você possa recuperar versões específicas.</p>
							<p><i>“Ele permite reverter arquivos para um estado anterior, reverter um projeto inteiro para um estado anterior, comparar mudanças feitas ao decorrer do tempo, ver quem foi o último a modificar algo que pode estar causando problemas, quem introduziu um bug e quando, e muito mais.”</i> [<a href="#ref">1</a>]</p>
							<p>A metodologia mais comum entre todas as pessoas, mesmo as que não entendem nada sobre isto, é copiar arquivos em outro diretório ou salvar as versões com nomes diferentes. Mas esta é muito suscetível a erros, por que é fácil esquecer em qual diretório você está e gravar acidentalmente no arquivo errado ou sobrescrever arquivos sem querer, etc. por conta disso foram sendo desenvolvidos sistemas que gerenciam esta tarefa, como por exemplo:</p>
							<p><b>1</b><i>Sistemas de controle de versão locais</i>: armazenam todas as alterações dos arquivos sob controle de revisão; Mas tais sistemas ainda carecia de uma funcionalidade: Não era possível trabalhar em conjunto com outros desenvolvedores, que usam outros sistemas.</p>
							<p><b>2</b><i>Sistemas de controle de versão centralizados</i>: possuem um único servidor central que contém todas as versões dos arquivos e vários clientes que podem resgatar (check out) os arquivos do servidor; Por ter um único servidor central, qualquer erro que ocorresse nele afetaria todos os projetos.</p>
							<p><b>3</b><i>Sistema de controle de versão distribuída</i>: Os clientes não apenas fazem cópias das últimas versões dos arquivos como também são as cópias completas do repositório. Assim, se um servidor falha, qualquer um dos repositórios dos clientes pode ser copiado de volta para o servidor para restaurá-lo. Este é o conceito utilizado pelo Git.</p>
							<p>Git é um software livre para controle de versão de códigos fontes. Graças a ele conseguimos compartilhar nosso código com outros desenvolvedores que estão dispostos a ajudar ou que estão em uma mesma equipe, seja de uma empresa ou para algum torneio por exemplo. A diferença é de que ele não permite que as alterações sejam subscritas, ou seja, que a versão de cada um será salva em “arquivos” diferentes.</p>
							<p>Existe também o Github: é literalmente uma rede social para desenvolvedores. Possui a mesma finalidade do Git, porém, há a possibilidade também de utiliza-lo como armazenamento em nuvem para seus projetos. Desta forma, caso haja algum imprevisto de você esquecer seu projeto em seu notebook mas com suas versões no Github, basta logar em sua conta por qualquer dispositivo.</p>
							<p><i>Introduzindo um “obs”: Não somente desenvolvedores podem utilizar estes programas, como também designs gráficos, arquitetos, e até escritores.</i></p>
							<p><b>HISTÓRIA</b></p>
							<p>O Git foi desenvolvido pelo Linus Torvalds em 2005, para que ele e sua equipe pudessem controlar o desenvolvimento do Kernel ou Núcleo sistema operacional Linux, ou GNU/Linux.[<a href="#ref">2</a>][<a href="#ref">3</a>]</p>
							<p><b>PORQUE UTILIZAR?</b></p>
							<p>Além do Github ter as facilidades já mencionadas do Git(A lembrar, sua finalidade principal para controle de versão, ou seja, como um dispositivo organizacional), o Github pode ser utilizado também como um armazenamento em nuvem para hospedar seus arquivos, e como um portfólio. Mas cuidado:</p>
							<p><i>“Se tudo o que você fez foi dar forks em milhares de projetos e nunca deu commit em nenhum deles, é melhor nem colocar o link.”</i> [<a href="#ref">4</a>]</p>
							<p>Muitas empresas pedem seu Github, ao invés de seu currículo, por que por ele a empresa poderá ver seus trabalhos realizados ou seus projetos que estão em andamento, e assim ter uma boa noção de sua capacitação. Do contrário:</p>
							<p><i>“Isso não chega a te desclassificar, mas levanta dúvidas quanto à tua identificação como “programador”.</i> [<a href="#ref">5</a>]</p>
							<p><b>REFERÊNCIAS</b></p>
							<p id="ref">1. <a href="https://git-scm.com/book/pt-br/v1/Primeiros-passos-Sobre-Controle-de-Vers%C3%A3o"></a>Primeiros passos - Sobre Controle de Versão</br>
								2. <a href="https://pt.wikipedia.org/wiki/Git">Git</a> (Wikipédia)</br>
								3. AQUILES, A. FERREIRA. R. — “Controlando Versões com Git e Github” (Pg. 3)</br>
								4. <a href="https://mauricio.github.io/2011/01/27/como-ser-chutado-de-uma-avaliacao-pra-uma-vaga-na-fase-de-curriculos.html">Como ser chutado de uma avaliação pra uma vaga na fase de currículos </a></br>
								5. <a href="https://medium.com/clebertech/github-como-curr%C3%ADculo-e-vis%C3%A3o-geral-sobre-processos-seletivos-37a2ed3e1f09">Github como currículo e visão geral sobre processos seletivos</a></p>
					
						</article>
    					</div>

				 	<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</button>
					      		</h2>
					  	</div>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<article class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</article>
					</div>
					 
</div>




			<!-- MODELO ARTIGOS
				
			<article class="card">
<img class="card-img-top" src="">
				<h2>Titulo do artigo</h2>
                                <p>Resumo do artigo.</p>
				<div class="artigo">
					<p><b>Tópicos do artigo</b></p>
					<p>Conteúdo do artigo</p>
					<p><b>REFERÊNCIAS</b></p>
					<p id="ref">1. <a href="">Primeira referência</a></br>
						2. <a href="">Segunda referência</a></p>
				</div>
                            	<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            		<button class="abrir btn btn-outline-primary">Ler artigo</button>
                            		<button class="fechar btn btn-outline-primary">Lido</button>
                    		</div>
    			</article>
	
			
				Inspirado em: https://www.devmedia.com.br/normalizacao-e-desnormalizacao-de-dados/24345
				Feito com: https://api.jquery.com/toggle/#toggle-display
				Implementação, algoritmo de: https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_hide_show
			
			<script>
				$(document).ready(function(){
				    $(".fechar").click(function(){
					$(".card-body").hide();
				    });
				});
			</script>
			-->

		</section>
	</section>

<?php get_footer(); ?>
