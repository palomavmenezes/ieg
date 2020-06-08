<?php
/**
 * Template Name: [Interna] Consultoria
 */

get_header();

$objetivo   = get_field('objetivo', $post->ID);
$metodologia    = get_field('metodologia', $post->ID);
$exemplos_de_como_ajudar    = get_field('exemplos_de_como_ajudar', $post->ID);
?> 

<main id="page-consultoria-interna">

	<section class="banner-consultoria-interna">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>

  <!-- ========= INÍCIO BREADCRUMB ========= -->
   <section id="breadcrumb">
      <div class="container">
	      <nav aria-label="breadcrumb">
	        <ol class="breadcrumb">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item"><a href="#">Para sua empresa</a></li>
	          <li class="breadcrumb-item"><a href="#">Consultoria</a></li>
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">Implementação e Sustentação de Centros de Serviços Compartilhados</li>
	        </ol>
	      </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->


	<section id="objetivo-informacao">
			<div class="container">
				<div class="row objetivo">
					<div class="col-md-6 title">
						<h3>Objetivo</h3>
					</div>
					<div class="col-md-6 title">
						<h6><?php echo $objetivo ?></h6>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 title">
						<hr style="height:1px; border:none; color:#F3F3F3; background-color:#F3F3F3;"/>
					</div>
				</div>

				<div class="row importancia">
					<div class="col-md-6 title">
						<h3>Metodologia</h3>
					</div>
					<div class="col-md-6 title">
						<h6><?php echo $metodologia ?></h6> 
					</div>
				</div>
			</div>
	</section>

		<section id="loren">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h2>Veja alguns exemplos de como o IEG pode ajudar a sua empresa:</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/consult-interna.jpg">
						<h6><?php echo $exemplos_de_como_ajudar ?></h6>
					</div>
				</div>
			</div>
	</section>


	<section id="empresas-parceiras">
    <div class="container">
      <div class="row">
        <div class="col-12 title-parceiros">
          <h2> Empresas que já treinamos </h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        </div>
		<div class="col-md-1 parceiros"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente1.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente2.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente3.jpg" width="100%"></div>
		<div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente4.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente5.jpg" width="100%"></div>
        <div class="col-md-1 parceiros"></div>
		<div class="col-md-1 parceiros"></div>
		<div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente6.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente7.jpg" width="100%"></div>
		<div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente8.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente9.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente10.jpg" width="100%"></div>
		<div class="col-md-1 parceiros"></div>
		<div class="col-md-2 parceiros"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente11.jpg" width="100%"></div>
		<div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente12.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente13.jpg" width="100%"></div>
        <div class="col-md-2 parceiros"><img src="<?php echo get_template_directory_uri(); ?>/img/clientes/cliente14.jpg" width="100%"></div>
		<div class="col-md-2 parceiros"></div>

      </div>
    </div>
  </section>

<?php get_template_part('inc/depoimentos'); ?>

	<section id="solucoes-do-ieg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h2>Conheça outras soluções do IEG que podem alavancar a gestão da sua empresa</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 bloco-solucoes">
						<h5>Mapeamento e Otimização de Processos</h5>
						<a href="<?php echo get_site_url(); ?>/mapeamento-e-otimizacao-de-processos" class="btn btn-light btn-solucoesieg">Ver mais</a>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Modelo de Gestão e Desenvolvimento de Pessoas</h5>
						<a href="<?php echo get_site_url(); ?>/modelo-de-gestao-e-desenvolvimento-de-pessoas" class="btn btn-light btn-solucoesieg">Ver mais</a>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Planejamento Estratégico</h5>
						<br><a href="<?php echo get_site_url(); ?>/planejamento-estrategico" class="btn btn-light btn-solucoesieg">Ver mais</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">

					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Plano de <br>Negócio</h5>
						<a href="<?php echo get_site_url(); ?>/plano-de-negocios" class="btn btn-light btn-solucoesieg">Ver mais</a>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Reestruturação organizacional</h5>
						<a href="<?php echo get_site_url(); ?>/reestruturacao-organizacional" class="btn btn-light btn-solucoesieg">Ver mais</a>
					</div>

					<div class="col-md-2">

					</div>
				</div>

			</div>
	</section>

<?php get_template_part('inc/contact'); ?>


</main>

<script>
	$('.carousel').carousel()
</script>

<?php
get_footer();
