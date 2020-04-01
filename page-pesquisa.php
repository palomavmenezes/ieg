<?php
/**
 * Template Name: Home
 */

get_header();
?> 

<main id="page-pesquisas">

	<section class="banner-consultoria">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Pesquisas</h1>
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
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">Pesquisa</li>
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
					<h6>Writers and stars of Veep have responded incredulously to the news an Australian politician required preinstalled stitches way email client, calendar, mapping program.</h6>
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria">
					<h1>Benchmarking de processos</h1>
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
					<h1>Pesquisa de satisfação</h1>
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
					<h1>Estudos em gestão de pessoas</h1>
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
					<h1>Análises de Mercado</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>
					<button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
				</div>

				<div class="col-md-6 blocos-consultoria mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consultoria.jpg">
				</div>
			</div>
		</div>
</section>

</main>

<script>
	$('.carousel').carousel()
</script>

<?php
get_footer();
