<?php
/**
 * Template Name: [Interna] Consultoria
 */

get_header();
?> 

<main id="page-consultoria-interna">

	<section class="banner-consultoria-interna">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Implementação e Sustentação de Centros de Serviços Compartilhados</h1>
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


	<section id="solucoes-ieg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h1>SOBRE O SHARED SERVICES KNOWLEDGE EXCHANGE</h1>
						<h6>Desde 2013, o Shared Services Knowledge Exchange representa o maior evento de interação e discussão sobre Serviços Compartilhados do país, reunindo um público formado por alta e média gerência em busca de soluções operacionais para as principais dificuldades e limitações enfrentadas pelos Centros. Em 2018, o 6th SSKE contou com a presença de mais de 150 profissionais de cerca de 60 empresas que debateram o CSC como protagonista da transformação das organizações.
						<br>
						<br>Desde 2013, o Shared Services Knowledge Exchange representa o maior evento de interação e discussão sobre Serviços Compartilhados do país, reunindo um público formado por alta e média gerência em busca de soluções operacionais para as principais dificuldades e limitações enfrentadas pelos Centros. Em 2018, o 6th SSKE contou com a presença de mais de 150 profissionais de cerca de 60 empresas que debateram o CSC como protagonista da transformação das organizações.
						<br>
						<br>Desde 2013, o Shared Services Knowledge Exchange representa o maior evento de interação e discussão sobre Serviços Compartilhados do país, reunindo um público formado por alta e média gerência em busca de soluções operacionais para as principais dificuldades e limitações enfrentadas pelos Centros. Em 2018, o 6th SSKE contou com a presença de mais de 150 profissionais de cerca de 60 empresas que debateram o CSC como protagonista da transformação das organizações.</h6>
					</div>
				</div>
			</div>
	</section>

		<section id="loren">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h1>LOREN</h1>
						<img src="<?php echo get_template_directory_uri(); ?>/img/consult-interna.jpg">
						<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>
					</div>
				</div>
			</div>
	</section>

<?php get_template_part('inc/clientes'); ?>
<?php get_template_part('inc/depoimentos'); ?>

	<section id="solucoes-do-ieg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h1>Conheça outras soluções do IEG que podem alavancar a gestão da sua empresa</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 bloco-solucoes">
						<h5>Mapeamento e Otimização de Processos</h5>
						<button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Modelo de Gestão e Desenvolvimento de Pessoas</h5>
						<button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Planejamento Estratégico</h5>
						<br><button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">

					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Plano de <br>Negócio</h5>
						<button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Reestruturação organizacional</h5>
						<button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
					</div>

					<div class="col-md-2">

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
