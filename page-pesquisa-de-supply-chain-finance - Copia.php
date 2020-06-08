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
				    A Área Financeira das Empresas
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC2" aria-expanded="false" aria-controls="collapseExample">
				    Tecnologias e Soluções Financeiras nas Empresas
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC3" aria-expanded="false" aria-controls="collapseExample">
				    Integração Financeira na Cadeia de Suprimentos
				  </button>

				  <button class="btn btn-black-radiusr" type="button" data-toggle="collapse" data-target="#BenchmarkemCSC4" aria-expanded="false" aria-controls="collapseExample">
				    Relacionamentos na Cadeia de Suprimentos
				  </button>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC">
				  <div class="card card-body">
				    Consiste na apresentação do perfil organizacional da Área Financeira das empresas, na descrição das principais atividades presentes, no grau de terceirização dessas atividades, além das soluções tecnológicas atreladas. Adicionalmente, verificam-se os indicadores de desempenho mais utilizados pela área financeira.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC2">
				  <div class="card card-body">
				    O capítulo destaca como as empresas buscam otimizar suas operações, antes restritas aos ganhos logísticos, por meio da intermediação de soluções financeiras para diversas atividades.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC3">
				  <div class="card card-body">
				     Aborda os principais aspectos relacionados à integração financeira (com clientes, fornecedores e áreas internas da organização) ao longo da cadeia de suprimentos das empresas pesquisadas.
				  </div>
				</div>
				</div>

				<div class="align-center">
				<div class="collapse" id="BenchmarkemCSC4">
				  <div class="card card-body">
				     São apresentadas as principais práticas das empresas no que tange ao seu relacionamento com os principais agentes pertencentes à cadeia de suprimentos: fornecedores, clientes e instituições financeiras.
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
				    A Área Financeira das Empresas
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#Resultados2" aria-expanded="false" aria-controls="collapseExample">
				    Tecnologias e Soluções Financeiras nas Empresas
				  </button>

				  <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#Resultados3" aria-expanded="false" aria-controls="collapseExample">
				    Integração Financeira na Cadeia de Suprimentos
				  </button>

				  <button class="btn btn-black-radiusr" type="button" data-toggle="collapse" data-target="#Resultados4" aria-expanded="false" aria-controls="collapseExample">
				   Relacionamentos na Cadeia de Suprimentos
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
