<?php
/**
 * Template Name: [Interna] Pesquisa
 */

get_header();

$objetivo   = get_field('objetivo', $post->ID);
$importancia    = get_field('importancia', $post->ID);
$metodologia    = get_field('metodologia', $post->ID);
?>

<main id="page-pesquisa-interna">

	<section class="banner-pesquisa-interna">
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
	          <li class="breadcrumb-item"><a href="#">Pesquisa</a></li>
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">Benchmarking de processos</li>
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
						<h3>Importância</h3>
					</div>
					<div class="col-md-6 title">
						<h6><?php echo $importancia ?></h6>
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

	<section id="estudos-realizados">
		<div class="container" id="accordion">
			<div class="row">
				<div class="col-md-12"><h2>Estudos já realizados</h2></div>
				<div class="buttons-pesquisa-interna">
				  <button class="btn btn-black-radiusl" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC" aria-expanded="true" aria-controls="BenchmarkemCSC">
				    Benchmark em CSC
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC2" aria-expanded="false" aria-controls="BenchmarkemCSC2">
				    Benchmark em CSC 2
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC3" aria-expanded="false" aria-controls="BenchmarkemCSC3">
				    Benchmark em CSC 3
				  </button>

				  <button class="btn btn-black-radiusr" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC4" aria-expanded="false" aria-controls="BenchmarkemCSC4">
				   Benchmark em CSC 4
				  </button>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC" data-parent="#accordion" aria-labelledby="BenchmarkemCSC">
				  <div class="card card-body">
				   O estudo, realizado anualmente desde 2009, analisa as práticas de gestão e operação adotadas nos CSCs brasileiros levando em conta a produtividade em custos e nível de serviço, compreendendo os macroprocessos de Requisition to Pay, Order to Cash, Fiscal, Contabilidade, Recursos Humanos, Tecnologia da Informação, Facilities e Jurídico.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC2" data-parent="#accordion" aria-labelledby="BenchmarkemCSC2">
				  <div class="card card-body">
				    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC3" data-parent="#accordion" aria-labelledby="BenchmarkemCSC3">
				  <div class="card card-body">
				    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC4" data-parent="#accordion" aria-labelledby="BenchmarkemCSC4">
				  <div class="card card-body">
				    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				  </div>
				</div>
				</div>

			</div>
		</div>
	</section>

	<section id="pesquisa-resultados">
		<div class="container">
			<div class="row" id="accordion2">

				<div class="col-md-12"><h2>Estudos já realizados</h2></div>
				<div class="buttons-pesquisa-interna">
				  <button class="btn btn-black-radiusl" type="button" data-toggle="collapse" data-target="#Resultados1" aria-expanded="true" aria-controls="Resultados1">
				    Benchmark em CSC
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#Resultados2" aria-expanded="false" aria-controls="Resultados2">
				    Benchmark em CSC 2
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#Resultados3" aria-expanded="false" aria-controls="Resultados3">
				    Benchmark em CSC 3
				  </button>

				  <button class="btn btn-black-radiusr" type="button" data-toggle="collapse" data-target="#Resultados4" aria-expanded="false" aria-controls="Resultados4">
				   Benchmark em CSC 4
				  </button>
				</div>

				<div class="align-center">
				<div class="collapse" id="Resultados1" data-parent="#accordion2" aria-labelledby="Resultados1">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col-md-2"></div>
				  		<div class="col-md-3 rd-relatorios">
				  			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/arquivo.svg"></div>
					  		<div class="col-md-12 txt-bot">Visualizar Relatório</div>
					  	</div>
				  		<div class="col-md-3 rd-videos">
					  		<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/botao-play.svg"></div>
					  		<div class="col-md-12 txt-bot">Assistir vídeo</div>
				  		</div>
				  		<div class="col-md-2"></div>
				  	</div>
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="Resultados2" data-parent="#accordion2" aria-labelledby="Resultados2">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col-md-2"></div>
				  		<div class="col-md-3 rd-relatorios">
				  			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/arquivo.svg"></div>
					  		<div class="col-md-12 txt-bot">Visualizar Relatório</div>
					  	</div>
				  		<div class="col-md-3 rd-videos">
					  		<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/botao-play.svg"></div>
					  		<div class="col-md-12 txt-bot">Assistir vídeo</div>
				  		</div>
				  		<div class="col-md-2"></div>
				  	</div>
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="Resultados3" data-parent="#accordion2" aria-labelledby="Resultados3">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col-md-2"></div>
				  		<div class="col-md-3 rd-relatorios">
				  			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/arquivo.svg"></div>
					  		<div class="col-md-12 txt-bot">Visualizar Relatório</div>
					  	</div>
				  		<div class="col-md-3 rd-videos">
					  		<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/botao-play.svg"></div>
					  		<div class="col-md-12 txt-bot">Assistir vídeo</div>
				  		</div>
				  		<div class="col-md-2"></div>
				  	</div>
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="Resultados4" data-parent="#accordion2" aria-labelledby="Resultados4">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col-md-2"></div>
				  		<div class="col-md-3 rd-relatorios">
				  			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/arquivo.svg"></div>
					  		<div class="col-md-12 txt-bot">Visualizar Relatório</div>
					  	</div>
				  		<div class="col-md-3 rd-videos">
					  		<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/botao-play.svg"></div>
					  		<div class="col-md-12 txt-bot">Assistir vídeo</div>
				  		</div>
				  		<div class="col-md-2"></div>
				  	</div>
				  </div>
				</div>
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
						<h2>Conheça outras soluções do IEG que podem alavancar a gestão da sua empresa</h2>
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
						<h5>Plano de Negócio</h5>
						<button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
					</div>

					<div class="col-md-4 bloco-solucoes">
						<h5>Reestruturação organizacional</h5>
						<br><button type="button" class="btn btn-light btn-solucoesieg" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
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
