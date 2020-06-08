<?php
/**
 * Template Name: [Interna] Relatórios e Publicações
 */
get_header();

$descricao    = get_field('descricao', $post->ID);
?>

<main id="page-relatorios-e-publicacoes-interna">

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
	          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900"><?php the_title(); ?></li>
	        </ol>
	      </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->


	<section id="apresentacao">
			<div class="container">
				<div class="row objetivo">
					<div class="col-md-6">
						<h2><?php the_title(); ?></h2>
						<h6><?php echo $descricao ?></h6>
					</div>
					<div class="col-md-6 title">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ilustrativa.png">
					</div>
				</div>

			</div>
	</section>

	<section id="capitulos">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Capítulos</h2></div>
				<div class="buttons-pesquisa-interna">
				  <button class="btn btn-black-radiusl" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC" aria-expanded="false" aria-controls="collapseExample">
				    Mapeamento do Cenário Tecnológico dos CSCs Brasileiros
				  </button>

				  <!-- <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC2" aria-expanded="false" aria-controls="collapseExample">
				    Benchmark em CSC 2
				  </button> -->

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC3" aria-expanded="false" aria-controls="collapseExample">
				    Destaque de Fornecedores de Soluções Tecnológicas para CSC
				  </button>

				  <button class="btn btn-black-radiusr" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC4" aria-expanded="false" aria-controls="collapseExample">
				    Catálogo de Fornecedores de Soluções Tecnológicas para CSC
				  </button>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC">
				  <div class="card card-body">
				    Reúne análises feitas com base no banco de dados do IEG sobre as principais características relacionadas à tecnologia dos Centros do país, como as principais ferramentas em uso e em avaliação, os principais desafios para implantação de novas tecnologias e os macroprocessos mais automatizados.
				  </div>
				</div>
				</div>

				<!-- <div class="align-center">
				<div class="collapse" id="BenchmarkemCSC2">
				  <div class="card card-body">
				    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				  </div>
				</div>
				</div> -->

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC3">
				  <div class="card card-body">
				     São apresentadas em maiores detalhes informações de algumas empresas que atuam em Serviços Compartilhados. Além da apresentação institucional, estão disponíveis dados demográficos como faturamento líquido, número de colaboradores, abrangência de atendimento, tipos de soluções oferecidas, principais clientes e experiências / cases de aplicação das soluções.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC4">
				  <div class="card card-body">
				     Consolida informações de mais de 200 empresas provedoras de soluções tecnológicas para CSCs brasileiros, como tipos de soluções oferecidas e website.
				  </div>
				</div>
				</div>

			</div>
		</div>
	</section>

	<section id="pesquisa-resultados">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h2>Versão Ilustrativa</h2>
					<p style="text-align: center;">Visualize uma versão resumida do Relatório <?php the_title(); ?>.</p>
				</div>
				<div class="buttons-pesquisa-interna">
				  <button class="btn btn-black-radiusl" type="button" data-toggle="collapse" data-target="#Resultados1" aria-expanded="false" aria-controls="collapseExample">
				    Panorama Tecnológico dos Processos Corporativos
				  </button>

				  <!-- <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#Resultados2" aria-expanded="false" aria-controls="collapseExample">
				    Benchmark em CSC 2
				  </button> -->

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#Resultados3" aria-expanded="false" aria-controls="collapseExample">
				    Soluções Tecnológicas para Processos Corporativos
				  </button>

				  <button class="btn btn-black-radiusr" type="button" data-toggle="collapse" data-target="#Resultados4" aria-expanded="false" aria-controls="collapseExample">
				   Catálogo de Fornecedores
				  </button>
				</div>

				<div class="align-center">
				<div class="collapse" id="Resultados1">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col-md-2"></div>
				  		<div class="col-md-3 rd-relatorios">
				  			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/arquivo.svg"></div>
					  		<div class="col-md-12 txt-bot">Visualizar Relatório</div>
					  	</div>
				  	</div>
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="Resultados2">
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
				<div class="collapse" id="Resultados3">
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
				<div class="collapse" id="Resultados4">
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

	<section id="solucoes-do-ieg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h2>Conheça outros relatórios do IEG que podem fornecer dados estratégicos para a sua empresa</h2>
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
						<br>
						<br>
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

<?php get_template_part('inc/contact-mensage'); ?>


</main>

<script>
	$('.carousel').carousel()
</script>

<?php
get_footer();
