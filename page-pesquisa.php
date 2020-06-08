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
					<h2>Conheça nossas pesquisas</h2>
					<h6>O IEG realiza estudos de benchmarking e pesquisas customizadas, sendo capaz de fornecer informações extremamente relevantes acerca dos vários setores da economia.</h6>
				</div>
			</div>
		</div>
</section>

<section id="consultoria-left">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 content-consultoria">
					<h2>Benchmarking de Processos</h2>
					<p>O estudo permite a comparação do desempenho dos processos de diferentes empresas, sendo analisados custos, indicadores de desempenho, sistemas, tecnologias e práticas de gestão e operação adotadas.</p>
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
					<h2>Pesquisa de Satisfação</h2>
					<p>Possui o objetivo de mensurar o nível de satisfação dos clientes internos e/ou externos em relação aos serviços prestados, podendo ser aplicada em empresas de qualquer setor da economia.</p>
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
					<h2>Estudos em Gestão de Pessoas</h2>
					<p>Permite a identificação de características dos colaboradores da empresa e a elaboração de estratégias que potencializem seus resultados e aumentem o engajamento demonstrado no dia a dia da operação.</p>
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
					<h2>Análises de Mercado</h2>
					<p>Com o levantamento de informações relevantes sobre o campo de atuação da empresa, possibilita a análise do seu posicionamento em relação ao mercado e a definição de estratégias e planos de ação orientados a resultados</p>
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
