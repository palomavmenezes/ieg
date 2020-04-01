<?php
/**
 * Template Name: Home
 */

get_header();
?> 

<main id="page-consultoria">

	<section class="banner-consultoria">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Consultoria</h1>
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
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">Consultoria</li>
	        </ol>
	      </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->


<section id="solucoes-ieg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h1>Confira as soluções do IEG para apoiar a sua empresa em seus desafios de gestão</h1>
					<h6>O IEG possui uma equipe altamente capacitada para desempenhar projetos que irão aprimorar a gestão da sua empresa. Nossos consultores têm como objetivo encontrar as melhores soluções para a sua operação.</h6>
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria desktop">
					<h1>Implementação e Sustentação de Centros de Serviços Compartilhados</h1>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

<section id="consultoria-right">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 blocos-consultoria desktop">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>

				<div class="col-md-6 content-consultoria">
					<h1>Mapeamento e Otimização de Processos</h1>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria">
					<h1>Modelo de Gestão e Desenvolvimento de Pessoas</h1>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

<section id="consultoria-right">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 blocos-consultoria desktop">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>

				<div class="col-md-6 content-consultoria">
					<h1>Planejamento Estratégico</h1>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria">
					<h1>Plano de Negócio</h1>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

<section id="consultoria-right">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 blocos-consultoria desktop">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>

				<div class="col-md-6 content-consultoria">
					<h1>Reestruturação organizacional</h1>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

<?php get_template_part('inc/contact-solution'); ?>


</main>

<script>
	$('.carousel').carousel()
</script>

<?php
get_footer();
