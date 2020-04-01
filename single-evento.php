<?php

global $post;

$banner_text_image = get_field( 'banner_text_image', $post->ID );
$initial_date = get_field( 'initial_date', $post->ID );
$description_title = get_field( 'description_title', $post->ID );
$description_text = get_field( 'description_text', $post->ID );
$description_image = get_field( 'description_image', $post->ID );
$banner_programation = get_field( 'banner_programation', $post->ID );
$premium_sponsors = get_field( 'premium_sponsors', $post->ID );
$master_sponsors = get_field( 'master_sponsors', $post->ID );
$startup_sponsors = get_field( 'startup_sponsors', $post->ID );
$url_gmaps = get_field( 'url_gmaps', $post->ID );
$companies = get_field( 'companies', $post->ID );
$gallery = get_field( 'gallery', $post->ID );
$external_gallery = get_field( 'external_gallery', $post->ID );
$previous_edition_banner = get_field( 'previous_edition_banner', $post->ID );
$previous_edition_banner_text = get_field( 'previous_edition_banner_text', $post->ID );
$previous_edition_url = get_field( 'previous_edition_url', $post->ID );
$previous_events = get_field( 'previous_events', $post->ID );

get_header();
?> 

<main id="page-evtr-interna">

  <!-- AQUI COMEÇA O BANNER DA SESSÃO DO EVENTO -->


  <section class="banner-evtr-interna" style="background: url(<?php echo get_the_post_thumbnail_url( $post->ID ) ?>), 0% 0% no-repeat padding-box; background-size: cover;">
    <div class="container-fluid">
      <div class="row next-event">
        <div class="col-md-3"></div>
        <div class="col-md-6 img-edition">
          <img src="<?php echo get_template_directory_uri(); ?>/img/txt-last-edition.png">
        </div>
        <div class="col-md-3"></div>
      </div>

      <div class="row background-black">
        <div class="col-md-3"></div>

        <div class="col-md-3 desktop">
          <button type="button" class="btn btn-green">Quero participar</button>
        </div>

        <div class="col-md-3 desktop">
          <button type="button" class="btn btn-yellow">Quero participar</button>
        </div>

        <div class="col-md-3 btn-responsive mobile">
          <button type="button" class="btn btn-green">Quero participar</button>
        </div>

        <div class="col-md-3 btn-responsive mobile">
          <button type="button" class="btn btn-yellow">Quero participar</button>
        </div>

        <div class="col-md-3"></div>
      </div>
    </div>
  </section>

<!-- AQUI COMEÇA A CONTAGEM REGRESSIVA DO EVENTO -->
  <section id="contagem">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 title">
              <div class="countdown">
                <div class="row place-center">
                  <div class="col-sm-12 title-countdown">O evento começará em</div>
                  
                  <div class="row box-date">
                    <div id="days" class="col-sm-12 date-number">50</div>
                    <div class="col-sm-12 current-timer">Dias</div>
                  </div>

                  <div class="row box-date">
                    <div id="hours" class="col-sm-12 date-number">21</div>
                    <div class="col-sm-12 current-timer">Horas</div>
                  </div>

                  <div class="row box-date">
                    <div id="minutes" class="col-sm-12 date-number">48</div>
                    <div class="col-sm-12 current-timer">Minutos</div>
                  </div>

                  <div class="row box-date">
                    <div id="seconds" class="col-sm-12 date-number">35</div>
                    <div class="col-sm-12 current-timer">Segundos</div>
                  </div>

                  <button type="button" class="btn btn-countdown">Quero ser lembrado</button>
              </div>
            </div>

            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
  </section>

<!-- AQUI ACABA A CONTAGEM REGRESSIVA DO EVENTO -->

  <!-- ========= INÍCIO BREADCRUMB ========= -->
   <section id="breadcrumb">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Para sua empresa</a></li>
            <li class="breadcrumb-item"><a href="#">Eventos e Treinamentos</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900"><?php echo $post->post_title ?></li>
          </ol>
        </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->

      <!-- AQUI COMEÇA SOBRE O EVENTO -->
      <section id="sobre-o-evento">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title">
            <h1><?php echo $description_title ?></h1>
            <h6><?php echo $description_text ?></h6>
            <img src="<?php echo $description_image ?>">
          </div>
        </div>
      </div>
  </section>

  <!-- AQUI COMEÇA PROGRAMAÇÃO E PALESTRANTES DO EVENTO -->
  <section id="courses">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 programacao">
          <button type="button" class="btn btn-yellow">Ver Programação</button>
        </div>

        <div class="col-md-6 palestrantes">
          <button type="button" class="btn btn-green">Conheça os Palestrantes</button>
        </div>
      </div>
    </div>
  </section>

  <!-- AQUI COMEÇA OS PATROCINADORES DO EVENTO -->
  <section id="patrocinadores">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h1>PATROCINADORES 8th SSKE</h1>
        </div>

        <?php if ( count( $premium_sponsors ) ): ?>
          <div class="col-md-12 premium">
            <div class="row">
              <div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
              <div class="col-md-2 title-patrocinadores">Premium</div>
              <div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
            </div>
            <div class="row imgs-logos">
              <?php foreach ( $premium_sponsors as $premium_sponsor ): ?>
                  <div class="col-md-4"><img src="<?php echo $premium_sponsor['logo'] ?>"></div>                
              <?php endforeach ?>
            </div>
          </div>
        <?php endif ?>

        <?php if ( count( $master_sponsors ) ): ?>
        <div class="col-md-12 master">
          <div class="row">
            <div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
            <div class="col-md-2 title-patrocinadores">Master</div>
            <div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
          </div>
          <div class="row imgs-logos">
            <?php foreach ( $master_sponsors as $master_sponsor ): ?>
              <div class="col-md-4"><img src="<?php echo $master_sponsor['logo'] ?>"></div>
            <?php endforeach ?>
          </div>
        </div>
        <?php endif ?>

        <?php if ( count( $startup_sponsors ) ): ?>
          <div class="col-md-12 startups">
            <div class="row">
              <div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
              <div class="col-md-2 title-patrocinadores">Startups</div>
              <div class="col-md-5"><hr style="height:1px; border:none; color:#707070; background-color:#707070;"/></div>
            </div>
            <div class="row imgs-logos">
              <?php foreach ( $startup_sponsors as $startup_sponsor ): ?>
                <div class="col-md-4"><img src="<?php echo $startup_sponsor['logo'] ?>"></div>
              <?php endforeach ?>
            </div>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

  <!-- AQUI O MAPA -->
  <section id="map">
      <iframe src="<?php echo $url_gmaps ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section>

  <?php if( count( $companies ) > 0 ): ?>
    <!-- AQUI COMEÇA A CONTAGEM REGRESSIVA DO EVENTO -->
    <section id="empresas-participantes">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title">
            <h1>Empresas participantes</h1>
          </div>
          
          <?php foreach ( $companies as $company ): ?>
            <div class="col-md-2 logo-participantes"><img src="<?php echo $company['logo'] ?>"></div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if( count( $gallery ) > 0 ): ?>
    <section id="photo-event">
      <div class="container">
        <!-- <div class="row"> -->
          <div class="col-md-12">
            <h1>Veja como foi o evento</h1>
          </div>
          <div class="col-12">
            <div class="row">
              <?php foreach ( $gallery as $image ): ?>
                <div class="col-md-4 ">
                  <img src="<?php echo $image['url']  ?>" >
                </div>
              <?php endforeach ?>
            </div>
          </div>

          <a href="<?php echo $external_gallery ?>" target="_blank" class="btn btn-blue">Ver mais fotos</a>
        </div>
    </section>
  <?php endif; ?>

  <section id="prev-event" style="background: url(<?php echo $previous_edition_banner ?>), 0% 0% no-repeat padding-box;
    background-size: cover;
    background-position: top;
    text-align: center;
    padding: 0px 0px 50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 txt-edit">
          <h1>Veja como foi Edição anterior</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-4 img-edition">
          <img src="<?php echo $previous_edition_banner_text ?>">
        </div>
        <div class="col-md-4"> </div>

        <?php if( $previous_edition_url ): ?>
          <div class="col-md-12 btn-edition">
            <a href="<?php echo $previous_edition_url ?>" class="btn btn-yellow">Ver mais fotos</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>




<!-- ======== CARROSSEL DE EVENTOS ========= -->
<section id="outros-eventos">
  <div class="container">
    <div class="row">
<div class="col-md-11 title-events-carousel">
  <h3>Conheça nossos outros eventos</h3>
</div>
<div class="col-md-1 arrows">
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section id="slider" class="desktop">
  <div class="container">
    <div class="row">
  <div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active slide-events">
      <div class="row w-100">
        <div class="col-md-6">
            <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
        <div class="col-md-6 second-slide">
              <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel2.jpg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>02 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="carousel-item slide-events">
      <div class="row w-100">
        <div class="col-md-6">
            <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel2.jpg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>02 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
        <div class="col-md-6 second-slide">
              <div class="row">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events"></div>
              <div class="col-md-4 description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
            </div>
        </div>
      </div>
  </div>
  </div>
</div>
</div>
    </div>
  </div>
</section>

<!-- ========== CAROUSEL MOBILE ========== -->
<section id="slider" class="mobile">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item slide-events active">
      <div class="row w-100">
        <div class="col-md-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events">
                <div class="description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
        </div>
      </div>
    </div>
    <div class="carousel-item slide-events">
      <div class="row w-100">
        <div class="col-md-12">
            <div class="row events">
              <div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events">
                <div class="description"><h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
    </div>
  </div>
</section>

<!-- END CAROUSEL MOBILE -->

<?php get_template_part('inc/depoimentos'); ?>
<?php get_template_part('inc/contact'); ?>


</main>
<script type="text/javascript">

  function countdown(){
    var now = new Date();
    var eventDate = new Date('<?php echo $initial_date ?>');

    var currentTiime = now.getTime();
    var eventTime = eventDate.getTime();

    var remTime = eventTime - currentTiime;

    var s = Math.floor(remTime / 1000);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var d = Math.floor(h / 24);

    h %= 24;
    m %= 60;
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    document.getElementById("days").textContent = d;
    document.getElementById("days").innerText = d;

    document.getElementById("hours").textContent = h;
    document.getElementById("minutes").textContent = m;
    document.getElementById("seconds").textContent = s;

    setTimeout(countdown, 1000);
  }

  countdown();
</script>

<?php
get_footer();
