<?php
/**
 * Template Name: Página do Curso
 */
?> 

<html>
<head>
  <meta charset="utf-8">
  <title>IEG | Para você</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="  /img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Data Cartês
    Theme URL: datacartes.com.br
    Author: Paloma Menezes
  ======================================================= -->

   <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Script dos Ícones Bootstrap -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  <script type="text/javascript">
  $('.carousel').carousel()

  // optional
    $('#treinamentosCarousel').carousel({
        interval: 5000
    });
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/funcoes.js"></script>
</head>

<body>
<main>

    <header id="header">
    <div class="container container-top-bar">
      <div class="row bar">
        <div class="col-md-12 top-bar">
          <ul>
            <li><a href="<?php echo get_site_url(); ?>/para-voce" style="color:#fff;">Espaço do aluno</a></li>
            <li><a href="<?php echo get_site_url(); ?>/trabalhe-conosco" style="color:#fff;">Trabalhe Conosco</a></li>
            <li><a href="<?php echo get_site_url(); ?>/contato" style="color:#fff;">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
</header>

<div id="menu">
    <div class="container">
      <div class="row">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="<?php echo get_site_url(); ?>" class="scrollto logo-ieg"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ieg.png"></a>
      </div>

      <nav class=" main-nav float-right d-none d-lg-block menu">
        <ul>
          <li><a href="<?php echo get_site_url(); ?>/para-voce" style="color:#113589;">Para você</a></li>
          <li><a href="<?php echo get_site_url(); ?>/para-sua-empresa">Para sua empresa</a></li>
          <li><a href="<?php echo get_site_url(); ?>/sobre">Sobre</a></li>
          <li><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
        </ul>
      </nav><!-- .main-nav -->
       </div>
    </div>
  </div><!-- #header -->
</main>


<!-- !!!!! ============ AQUI COMEÇA O CONTEÚDO DA PÁGINA ============ !!!! -->

<main id="page-pagina-do-curso">

	<section id="banner-pagina-do-curso">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Excel aplicado a negócios</h1>
				</div>

        <div class="col-md-12 icons-cursos">
          <ul>
            <li class="fa fa-calendar" style="margin:0px;">
              <li>Dias 23 e 24 de novembro</li>
            </li>

            <li class="fa fa-clock-o" style="margin:0px;">
              <li>12 horas de teoria e práticas</li>
            </li>

            <li class="fa fa-map-marker" style="margin:0px;">
              <li>Botafogo</li>
            </li>
          </ul>
        </div>

        <div class="col-md-12 btn-banner">
          <button type="button" class="btn btn-yellow">Agende uma conversa</button>
        </div>
			</div>
		</div>
	</section>

<!------- SEÇÃO IMERÇÃO --------->
  <section id="pq-estudar">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h2>Uma imersão de criatividade e experimentação, que vai te guiar por um processo de inovação com a abordagem do Excel Aplicado a Negócios</h2>
          <h6>O curso possui uma abordagem inovadora, trazendo diversos conceitos da gestão empresarial para os participantes, que terão como apoio para desenvolver suas análises a ferramenta MS Excel. Através de casos práticos e reais, com enfoque em diversos setores da economia e de diversas áreas organizacionais das empresas, o participante passará pelas principais funcionalidades desse software de uma forma prática e orientada ao mercado.</h6>
        </div>
      </div>
    </div>
  </section>
<!------- FIM DA SEÇÃO IMERÇÃO --------->


  <section id="bloco-pesquisa">
    <div class="container">
      <div class="row bg-treinamento-interno">
        <div class="col-md-5 pesquisa">
          <h3 class="titles-sua-empresa">Objetivo</h3>
          <p class="description-sua-empresa">Profissionais de todas as áreas que necessitam de qualificação em Excel voltada à realidade empresarial.</p>
          <h3 class="titles-sua-empresa">O treinamento </h3>
          <p class="description-sua-empresa">Formar profissionais altamente qualificados em análises empresariais com o apoio da ferramenta MS Excel, tornando as planilhas um poderoso instrumento de apoio à tomada de decisão, com aumento significativo na performance de trabalho.</p>
          <button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Inscreva-se agora</button>
        </div>

        <div class="col-md-7 img-pesquisa">
        </div>
      </div>
    </div>
  </section>

  <section id="metodologia">
    <div class="container">
      <div class="row">
        <div class="col-md-6 title">
          <h2>Metotologia</h2>
          <p>Writers and stars of Veep have responded incredulously to the news an Australian politician required preinstalled stitches way email client, calendar, mapping program.</p>

          <h3>Metodologia 1</h3>
          <h6>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im</h6>

          <h3>Metodologia 2</h3>
          <h6>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im</h6>

          <h3>Metodologia 3</h3>
          <h6>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im</h6>
        </div>
        <div class="col-md-6">
          <div class="row cursos">
            <div class="col-12 photo-cursos"><img src="<?php echo get_template_directory_uri(); ?>/img/cursos.jpg"></a></div>
            <div class="col-12"><p class="text-bloco" style="margin-top: 20px;">Dê o próximo passo na sua carreira com o Excel Aplicado a Negócios</p></div>
            <div class="col-12"><h6 class="price">R$ 3.620,00</h6></div>
            <div class="col-12"><p class="parcel-price">12 x de R$ 301,67</p></div>
            <div class="col-12"><button type="button" class="btn btn-blue">Inscreva-se agora</button></div>
            <div class="col-12"><p class="text-bloco" style="margin-bottom: 50px;">Turma com vagas limitadas!</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="materias">
    <div class="container">
      <div class="row">
        <div class="col-md-8 title">
          <h2>O que você vai aprender</h2>
          <ul class="to-know">
            <li>1 - Conhecendo e aplicando os principais recursos do MS Excel 2007</li>
            <li>2 - Como ganhar produtividade para analisar e apresentar dados no Excel</li>
            <li>3 - Cases empresariais com aplicação das principais fórmulas</li>
            <li>4 - Utilização de fórmulas e tabela dinâmica para análise de dados e geração de cenários de resultados</li>
            <li>5 - Produção de gráficos dinâmicos e dashboards para visualização de indicadores empresariais</li>
            <li>6 - Trabalhando base de dados reais externas ao Excel</li>
            <li>7 - Análises de dados com funções estatísticas</li>
            <li>8 - Criação de planilhas profissionais, com recursos de proteção e validação de dados</li>
            <li>9 - Criação de relatórios de pesquisas em banco de dados empresariais</li>
            <li>10 - Aplicações financeiras e simulação de resultados</li>
            <li>11 - Escolha de cenários otimizados, maximizando receita ou minimizando custos de operação</li>
            <li>12 - Simulação de decisões logísticas</li>
            <li>13 - Modelos de previsão de vendas e planejamento de marketing</li>
          </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
  </section>

  <section id="professores">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h2>Professores</h2>
          <h6>Nossos professores ensinam a noite o que fazem durante o dia. Trazem toda sua experiência de mercado para te ajudar a chegar onde você merece</h6>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 teacher">
          <img src="<?php echo get_template_directory_uri(); ?>/img/testemonial-man.png">
          <h3>Daniel Arthur</h3>
          <h6>Senior Product</h6>
          <h6>Designer na Farfetch</h6>
          <div class="row">
            <div class="col-md-12 social-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-clean.png">
            </div>
          </div>
        </div>

        <div class="col-md-4 teacher">
          <img src="<?php echo get_template_directory_uri(); ?>/img/testemonial-man.png">
          <h3>Daniel Arthur</h3>
          <h6>Senior Product</h6>
          <h6>Designer na Farfetch</h6>
          <div class="row">
            <div class="col-md-12 social-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-clean.png">
            </div>
          </div>
        </div>

        <div class="col-md-4 teacher">
          <img src="<?php echo get_template_directory_uri(); ?>/img/testemonial-man.png">
          <h3>Daniel Arthur</h3>
          <h6>Senior Product</h6>
          <h6>Designer na Farfetch</h6>
          <div class="row">
            <div class="col-md-12 social-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-clean.png">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 view-teachers">
          <button type="button" class="btn btn-blue">Ver mais professores</button>
      </div>
    </div>
  </section>

<?php get_template_part('inc/depoimentos'); ?>

  <section id="investiment">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h2>Investimento</h2>
        </div>

        <div class="col-md-12 title">
          <h2>aqui vai entrar o pagamento</h2>
        </div>
      </div>
    </div>
  </section>

  <section id="perguntas-frequentes">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h2>Perguntas frequentes:</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <div class="row">
                  <div class="col-11">
                  <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    O curso é presencial ou online?
                  </button> 
                </h5>
              </div>
              <div class="col-1">
              <li class="fa fa-angle-down" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></li>
              </div>
            </div>
            </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <div class="row">
                  <div class="col-11">
                  <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    O curso é presencial ou online?
                  </button> 
                </h5>
              </div>
              <div class="col-1">
              <li class="fa fa-angle-down" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></li>
              </div>
            </div>
          </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <div class="row">
                  <div class="col-11">
                  <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    O curso é presencial ou online?
                  </button> 
                </h5>
              </div>
              <div class="col-1">
              <li class="fa fa-angle-down" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></li>
              </div>
            </div>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFour">
                <div class="row">
                  <div class="col-11">
                  <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    O curso é presencial ou online?
                  </button> 
                </h5>
              </div>
              <div class="col-1">
              <li class="fa fa-angle-down" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></li>
              </div>
            </div>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFive">
                <div class="row">
                  <div class="col-11">
                  <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    O curso é presencial ou online?
                  </button> 
                </h5>
              </div>
              <div class="col-1">
              <li class="fa fa-angle-down" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"></li>
              </div>
            </div>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSix">
                <div class="row">
                  <div class="col-11">
                  <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    O curso é presencial ou online?
                  </button> 
                </h5>
              </div>
              <div class="col-1">
              <li class="fa fa-angle-down" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"></li>
              </div>
            </div>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="offset-md-1 col-md-4">
          <div class="row txt-contato">
            <div class="col-md-12">
              <h6 style="font-weight: 900;">Tem alguma dúvida específica?</h3>
              <h6>Entre em contato com a gente: <br>cursos@ieg.com.br <br>(21)9999-9999</h6>
              <button type="button" class="btn btn-white">Agende uma conversa</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<script>
	$('.carousel').carousel()

  // JAVA SCRIPT DO ACCORDEON

  $('.collapse').collapse()
</script>

<?php
get_footer();
