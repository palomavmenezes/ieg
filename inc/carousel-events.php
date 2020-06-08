<?php
  $args = array(
      'post_type' => 'evento',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'orderby' => 'ASC'
  );

  $eventos = new WP_Query($args);
  $cols =  2;
  $counter = 1;
?>


<!-- ======== CARROSSEL DE EVENTOS ========= -->
<section>
  <div class="container">
    <div class="row">
<div class="col-md-11 title-events-carousel">
  <h3>Eventos em destaques</h3>
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




<!-- 
<section id="slider" class="desktop">
  <div class="container">
    <div class="row">
  <div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="row w-100">
    
      <div class="carousel-item active col-md-6 slide-events">
            <div class="row events">
              <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events"></div>
              <div class="col-md-4 description">
                <h4>01 de Novembro</h4>
                <p>Breve descrição do evento</p>
                <p>Cubo Itaú - São Paulo, SP</p>
                <button type="button" class="btn btn-light btn-events">Conheça o SSLF <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
              </div>
      </div>
    </div>
    <div class="carousel-item slide-events col-md-6 second-slide">
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
</div>
</div>
    </div>
  </div>
</section> -->

<!-- <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide multi-item-carousel" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        
        <div class="item__third">
          <img src="//placehold.it/900x300/c69/f9c/?text=1" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
      <div class="item__third">
          <img src="//placehold.it/900x300/9c6/cf9/?text=2" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div></div>
      <div class="carousel-item">

        <div class="item__third">
          <img src="//placehold.it/900x300/9c6/cf9/?text=2" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      <div class="item__third">
          <img src="//placehold.it/900x300/69c/9cf/?text=3" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div></div>
      <div class="carousel-item">

        <div class="item__third">
          <img src="//placehold.it/900x300/69c/9cf/?text=3" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      <div class="item__third">
          <img src="//placehold.it/900x300/c69/f9c/?text=1" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div></div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div> -->


<!-- <section id="slider" class="desktop">
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
</section> -->


  <div class="container-fluid" >

 <div class="row">
 <div id="owl-demo" class="owl-carousel owl-theme">
             <?php if( count( $eventos->posts ) > 0 ): ?>
 

      <?php foreach ( $eventos->posts as $key => $evento ): ?>
              <?php 
                $banner      = get_field('card_image', $evento->ID );
                $title       = get_field('card_title', $evento->ID );
                $description = get_field('card_small_desc', $evento->ID );
                $image       = get_field('card_image', $evento->ID);
                $local       = get_field('card_event_local', $evento->ID);
              ?>
        <div class="item">
              <div class="row events">
                  <div class="col-md-6" style="padding: 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-caroulsel1.jpeg" class="img-slide-events img-fluid">
                  </div>
                  <div class="col-md-4 description">
                      <h4><?php echo  $title; ?></h4>
                      <p><?php echo $description; ?></p>
                      <p><?php echo $local; ?></p>
                    <a href="<?= get_permalink($evento) ?>" class="btn btn-light btn-events">Conheça o SSLF <img  src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"   ></a>
                  </div>
               </div>
        </div>
        <?php endforeach ?>

        <?php else: ?>
        <p>Nenhum evento encontrado.</p>
      <?php endif ?> 
    </div>
 </div>
  </div>


<script type="text/javascript">

jQuery(document).ready(function(){
    $('#owl-demo').owlCarousel({
      center: true,
      autoplay: false,
      items:1,
      autoWidth: $(window).width() > 900,
      nav:true,

navText : [$('.carousel-control-prev'),$('.carousel-control-next')],
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 3,
          nav: true,
          loop: false,
          margin: 20
        }
      }
  });
});
</script>



<!-- ========== CAROUSEL MOBILE ========== -->


<!-- END CAROUSEL MOBILE -->
