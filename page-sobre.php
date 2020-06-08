<?php get_header('header-sobre.php');
/**
 * Template Name: Home
 */
  
  global $post;

  $products = get_field( 'hilighted_products', $post->ID );

?> 

<!-- !!!!! ============ AQUI COMEÇA O CONTEÚDO DA PÁGINA ============ !!!! -->

<main id="sobre">

	<section class="banner-home">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>O IEG</h1>
				</div>
			</div>
		</div>
	</section>


<section id="description-about">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h2>Somos a empresa que elabora soluções em ensino, pesquisa e consultoria em gestão para você e pra sua organização.</h2>
        </div>
      </div>
    </div>
  </section>

  <section id="about-missao">
    <div class="container">
      <div class="row">
        <div class="col-md-4 bloco-esquerda">
          <h4>Missão</h4>
          <p>Contribuir para o desenvolvimento de pessoas e organizações gerando e disseminando conhecimento</p>
        </div>

        <div class="col-md-5 bloco-foto">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sobre-missao.jpg">
        </div>

        <div class="col-md-3">
        </div>        
      </div>
    </div>
  </section>

  <section id="about-visao">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>

        <div class="col-md-5 bloco-foto">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sobre-visao.jpg">
        </div>

        <div class="col-md-4 bloco-direita">
          <h4>Visão</h4>
          <p>Ser o principal canal de conhecimento de gestão voltado para estudantes e profissionais</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about-valores">
    <div class="container">
      <div class="row">
        <div class="col-md-4 bloco-esquerda">
          <h4>Valores</h4>
          <p>Valores Gente / Pessoas Senso de dono Ética Inovação Brilho nos olhos Eficiência</p>
        </div>

        <div class="col-md-5 bloco-foto">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sobre-valores.jpg">
        </div>

        <div class="col-md-3">
        </div>        
      </div>
    </div>
  </section>

  <section id="nossa-historia">
    <div class="container">
      <div class="row">
        <div class="col-md-6 carousel-historia">

          <div class="row desktop">
            <div class="col-md-12">
              <div id="quote-carousel" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                </div>

                <!-- Indicators -->
              <ul class="carousel-indicators">
                <li><a class="carousel-control-prev" href="#quote-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a></li>
                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#quote-carousel" data-slide-to="1"></li>
                <li data-target="#quote-carousel" data-slide-to="2"></li>
                <li><a class="carousel-control-next" href="#quote-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span></a></li>
              </ul>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
            
            </div>
          </div>
        </div>

        <div class="col-md-6 bloco-historia">
          <div class="row">
            <div class="col-md-12"><h2>Nossa História</h2></div>
            <div class="col-md-12"><p>o IEG foi criado em 2008 por três engenheiros, ex-alunos da UFRJ, e ao longo dos anos a empresa foi desenvolvendo expertise e se consolidando no mercado, tornando-se referência em treinamentos, projetos e pesquisas voltados para gestão.</p></div>
          </div>
      </div>

        <div class="row mobile">
            <div class="col-md-12">
              <div id="quote-carousel" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                  <div class="carousel-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/nossa-historia.jpg" width="100%">
                  </div>
                </div>

                <!-- Indicators -->
              <ul class="carousel-indicators">
                <li><a class="carousel-control-prev" href="#quote-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a></li>
                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#quote-carousel" data-slide-to="1"></li>
                <li data-target="#quote-carousel" data-slide-to="2"></li>
                <li><a class="carousel-control-next" href="#quote-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span></a></li>
              </ul>

              </div>
            </div>
          </div>
    </div>
  </section>

  <section id="engenharia-de-gestao">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h2>O que é Engenharia de Gestão?</h2>
          <p>A Engenharia de Gestão otimiza e aperfeiçoa processos, construindo modelos de gestão para tomadas de decisão dentro de um negócio. O objetivo principal é produzir conhecimento, aumentar produtividade e gerar resultados. Por isso, nós utilizamos esse conceito dentro de nossas áreas de atuação: Escola de Negócios, Pesquisa e Consultoria em Gestão.</p>
        </div>
      </div>
    </div>
  </section>

    <section id="grafico-engenharia-de-gestao">
    <div class="container">
      <div class="row">
        <div class="col-md-4 bloco-engenharia-de-gestao bloco-color1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/alvo.png">
          <h6>Regulação</h6>
          <p>Gente / Pessoas Senso de dono</p>
        </div>

        <div class="col-md-4 bloco-engenharia-de-gestao bloco-color2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/home.png">
          <h6>Regulação</h6>
          <p>Gente / Pessoas Senso de dono</p>
        </div>

        <div class="col-md-4 bloco-engenharia-de-gestao bloco-color3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/grafico.png">
          <h6>Regulação</h6>
          <p>Gente / Pessoas Senso de dono</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <img src="<?php echo get_template_directory_uri(); ?>/img/engenharia-de-gestao.png" width="100%">
          <div class="row">
            <div class="col-md-12 txt-engenharia-de-gestao">
              <h3>Engenharia de Gestão</h3>
              <p>LOREM IPSUM</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 bloco-engenharia-de-gestao bloco-color4">
          <img src="<?php echo get_template_directory_uri(); ?>/img/engrenagem.png">
          <h6>Regulação</h6>
          <p>Gente / Pessoas Senso de dono</p>
        </div>

        <div class="col-md-4 bloco-engenharia-de-gestao bloco-color5">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lampada.png">
          <h6>Regulação</h6>
          <p>Gente / Pessoas Senso de dono</p>
        </div>

        <div class="col-md-4 bloco-engenharia-de-gestao bloco-color6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mao.png">
          <h6>Regulação</h6>
          <p>Gente / Pessoas Senso de dono</p>
        </div>
      </div>
  </section>

  <section id="escola-de-negocios">
    <div class="container">
      <div class="row">
        <div class="col-md-10 carousel-historia">
          <img src="<?php echo get_template_directory_uri(); ?>/img/escola-de-negocios.jpg" width="100%">
        </div>

        <div class="col-md-4 bloco-escola-de-negocios">
          <h2>Escola de <br>Negócios</h2>
          <p>O IEG possui uma das principais Escolas de Negócios independentes do país que tem por objetivo ensinar aos alunos habilidades voltadas para o mercado de trabalho de forma prática e dinâmica, para formar profissionais altamente capacitados em diversas áreas relacionadas à gestão empresarial. Acreditamos que a #EducaçãoMudaTudo e é o melhor caminho para uma carreira de sucesso.</p>
          <ul>
            <li><h5><img src="<?php echo get_template_directory_uri(); ?>/img/check.svg"> Conteúdo prático</h5></li>
            <li><h5><img src="<?php echo get_template_directory_uri(); ?>/img/check.svg"> Metodologia própria</h5></li>
            <li><h5><img src="<?php echo get_template_directory_uri(); ?>/img/check.svg"> Professores com experiência de mercado</h5></li>
            <li><h5><img src="<?php echo get_template_directory_uri(); ?>/img/check.svg"> Formação de habilidades técnicas e comportamentais</h5></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="pesquisa-about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 bloco-pesquisa-about">
          <h2>Pesquisa</h2>
          <p>Com uma extensa rede de mais de 100 empresas clientes ao longo dos anos, nossa área de Inteligência deMercado já realizou diversas Pesquisas com foco em Gestão, gerando diagnósticos e auxiliando nas estratégias e tomadas de decisão de grandes corporações, através de metodologia própria e customizada.</p>
          <button class="btn btn-light btn-information">Ver mais</button>
        </div>

         <div class="col-md-10 carousel-historia">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pesquisa-about.jpg" width="100%">
        </div>
      </div>
    </div>
  </section>

  <section id="consultoria-about">
    <div class="container">
      <div class="row">
        <div class="col-md-10 carousel-historia">
          <img src="<?php echo get_template_directory_uri(); ?>/img/consultoria-about.jpg" width="100%">
        </div>

        <div class="col-md-4 bloco-consultoria-about">
          <h2>Consultoria</h2>
          <p>Possuímos uma equipe altamente capacitada para desempenhar projetos com a finalidade de aprimorar os resultados das empresas. Nossos consultores trabalham com foco em encontrar as melhores soluções para apoiar as organizações em seus desafios de gestão.</p>
          <button class="btn btn-light btn-information">Ver mais</button>
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
