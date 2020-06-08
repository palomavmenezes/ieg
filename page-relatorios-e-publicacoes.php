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
					<h2>Saiba mais sobre relatórios <br>e publicações do IEG</h2>
					<h6>A partir de todo o conhecimento adquirido através da realização de pesquisas e projetos de consultoria em empresas de diferentes portes, o IEG produz relatórios e publicações que contribuem para a disseminação de conhecimento e a evolução do mercado.</h6>
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria">
					<h2>Mapa Tecnológico Brasileiro 2019</h2>
					<p>O estudo teve como objetivo realizar um levantamento sobre as principais tendências tecnológicas aplicáveis a processos corporativos e suas utilizações no mercado brasileiro e no mundo. Adicionalmente, também foram mapeados mais de 300 provedores de soluções tecnológicas, considerando empresas e startups atuantes no país, para a elaboração de um catálogo de fornecedores.</p>
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
					<h2>Manual de Boas Práticas em CSC</h2>
					<p>Relatório atualizado anualmente com informações sobre as características gerais dos Centros de Serviços Compartilhados do Brasil, práticas de gestão utilizadas, produtividade e custos dos processos mais comuns e perfil dos profissionais atuantes no modelo.</p>
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
					<h2>Mapa Tecnológico em CSCs Brasileiros</h2>
					<p>Levantamento inédito realizado pelo IEG sobre o cenário tecnológico do mercado de Serviços Compartilhados no país, teve como objetivo apoiar as empresas na busca por ferramentas tecnológicas de otimização de processos e apresentar os principais fornecedores de soluções disponíveis.</p>
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
					<h2>Pesquisa de Supply Chain Finance</h2>
					<p>O relatório apresenta informações obtidas a partir de entrevistas com executivos de 67 empresas industriais e de serviços pertencentes a 15 setores da economia e destaca, dentre outras informações, um levantamento sobre a implantação do conceito de integração financeira na cadeia de suprimentos das organizações, soluções financeiras disponíveis além do grau de utilização das mesmas pelas empresas brasileiras.</p>
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
					<h2>Práticas Logísticas</h2>
					<p>O estudo lança uma visão sistêmica e esclarecedora sobre as práticas logísticas das grandes empresas, permitindo o aprimoramento de diversos processos e operações.</p>
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
