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


<section id="slider" class="desktop">
  <div class="container">
    <div class="row">
  <div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="true">
  <div class="carousel-inner">
  <?php if( count( $eventos->posts ) > 0 ): ?>
      <?php foreach ( $eventos->posts as $key => $evento ): ?>
        <?php 
          $banner      = get_field('card_image', $evento->ID );
          $title       = get_field('card_title', $evento->ID );
          $description = get_field('card_small_desc', $evento->ID );
          $image       = get_field('card_image', $evento->ID);
          $local       = get_field('card_event_local', $evento->ID);
        ?>
       
      <?php if ( $counter == 1): ?>  
      <div class=" slide-events carousel-item <?= ($key == 0) ? 'active' : '' ?> ">
      <div class="row w-100">
      <?php endif ?>
        <div class="col-md-6 <?= $counter%2 == 0? 'second-slide' : '' ?>">
            <div class="row events">
              <div class="col-md-6"><img src="<?php echo $image['url']; ?>" class="img-slide-events"></div>
              <div class="col-md-4 description">
              <h4><?php echo  $title; ?></h4>
                <p><?php echo $description; ?></p>
                <p><?php echo $local; ?></p>
                <a href="<?= get_permalink($evento) ?>">
                <button type="button" class="btn btn-light btn-events">Conheça<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></button>
                </a>
              </div>
            </div>
        </div>

        <?php if ($counter == $cols): ?>

          </div>
          <!--.row-->
        </div>
      <?php endif ?>

      <?php 
        $counter++;
      if($counter > $cols) $counter = 1;
      ?>

      <?php endforeach ?>

              <?php else: ?>
                <p>Nenhum evento encontrado.</p>
              <?php endif ?>
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
        <?php if( count( $eventos->posts ) > 0 ): ?>
            <?php foreach ( $eventos->posts as $key => $evento ): ?>
              <?php 
                $banner      = get_field('card_image', $evento->ID );
                $title       = get_field('card_title', $evento->ID );
                $description = get_field('card_small_desc', $evento->ID );
                $image       = get_field('card_image', $evento->ID);
                $local       = get_field('card_event_local', $evento->ID);
              ?>
            
            <?php if ( $counter == 1): ?>  
            <div class=" slide-events carousel-item <?= ($key == 0) ? 'active' : '' ?> ">
            <div class="row w-100">
            <?php endif ?>
              <div class="col-md-6 <?= $counter%2 == 0? 'second-slide' : '' ?>">
                  <div class="row events">
                    <div class="col-md-6"><img src="<?php echo $image['url']; ?>" class="img-slide-events"></div>
                    <div class="col-md-4 description">
                    <h4><?php echo  $title; ?></h4>
                      <p><?php echo $description; ?></p>
                      <p><?php echo $local; ?></p>
                      <a class="btn btn-light btn-events" href="<?= get_permalink($evento) ?>">Conheça <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right-white.png"></a></div>
                    </div>
                  </div>
              </div>

              <?php if ($counter == $cols): ?>

                </div>
                <!--.row-->
              </div>
            <?php endif ?>

            <?php 
              $counter++;
            if($counter > $cols) $counter = 1;
            ?>

            <?php endforeach ?>

                    <?php else: ?>
                      <p>Nenhum evento encontrado.</p>
                    <?php endif ?>
       </div>
    </div>
  </div>
</section>

<!-- END CAROUSEL MOBILE -->
