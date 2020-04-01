<?php
/**
 * Template Name: Home
 */

get_header();
?> 

<main id="page-relatorios-e-publicacoes">

	<section class="banner-relatorios-e-publicacoes">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Relatórios e Publicações</h1>
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
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">Relatórios e Publicações</li>
	        </ol>
	      </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->


<section id="solucoes-ieg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h1>Conheça nossas pesquisas</h1>
					<h6>Writers and stars of Veep have responded incredulously to the news an Australian politician <br>required preinstalled stitches way email client, calendar, mapping program.</h6>
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria">
					<h1>Mapa Tecnológico Brasileiro 2019</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>
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
					<h1>Manual de Boas Práticas em CSC</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>
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
					<h1>Mapa Tecnológico em CSCs Brasileiros</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>
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
					<h1>Pesquisa de Supply Chain Finance</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>
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
					<h1>Práticas Logísticas</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria">
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
