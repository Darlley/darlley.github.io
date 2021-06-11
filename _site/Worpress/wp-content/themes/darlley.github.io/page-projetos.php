<?php
	// Template Name: Projetos
	get_header(); 
?>			   

	<!-- INICIO SESSÃO -->
	<section id="servicos-pg">
		<div class="borda">
      			<h1>PROJETOS FEITOS</h1>
		</div>
		
		<?php query_posts('post_type=Projeto&post_per_page=-1'); ?>
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<div class="desktop-display">
				<!-- CARD PROJETO PORTFÓLIO -->
					<div class="card">
						<a href="https://darlley.github.io/" target="_blank"><img src="<?php the_field('imagem_projetosN'); ?>" class="certificados card-img-top" alt="Portfólio Desktop"></a>
						<div class="card-body">
							<h5 class="card-title"><?php the_title(); ?></h5>
							<p class="card-text"><?php the_content(); ?></p>
							<p>
								<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">VERSÕES ANTERIORES</a>
							</p>
							<div class="row">
								<div class="col">
									<div class="collapse multi-collapse" id="multiCollapseExample1">
										<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
											
											<div class="carousel-inner">
												<?php 
													$i = 0;
													$repetidor_imagens = get_field('repetidor_imagens');
												?>
												<?php foreach ($repetidor_imagens as $imagem): $i++ ?>
													<?php $imagens_galeria = $imagem['imagens_galeria']; ?>
													<div class="<?php echo ($i == 1 ? 'carousel-item active' : 'carousel-item'); ?>;">
														<img src="<?php echo $imagens_galeria[$i]; ?>" class="d-block w-100" alt="...">
													</div>
												<?php endforeach; ?>
											</div>

											<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php else: ?>
			<p>Não há projetos para mostrar...</p>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

		

			
		
		<!-- CARD EXEMPLO 

		    <div class="card">
		    <a href="https://darlley.github.io/" target="_blank"><img src="imagens/Projetos/portfolio-v3.PNG" class="certificados card-img-top" alt="Portfólio Desktop"></a>
		    <div class="card-body">
		      <h5 class="card-title">PORTFÓLIO</h5>
		      <p class="card-text">Projeto pessoal, concluido em 31/08/2019.</p>
		      <p>
			<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">VERSÕES ANTERIORES</a>
		      </p>
		      <div class="row">
			<div class="col">
			  <div class="collapse multi-collapse" id="multiCollapseExample1">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				    <div class="carousel-inner">
				      <div class="carousel-item active">
					<img src="imagens/Projetos/portfolio-v1.png" class="d-block w-100" alt="...">
				      </div>
				      <div class="carousel-item">
					<img src="imagens/Projetos/portfolio-v2.png" class="d-block w-100" alt="...">
				      </div>
				    </div>
				    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
			  </div>
			</div>
		      </div>
		    </div>
		  </div>
		-->							   
															       
<?php get_footer(); ?>
