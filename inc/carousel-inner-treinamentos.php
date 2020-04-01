<?php 
$cols =  4;
$counter = 1;
?>
<div class="carousel-inner">
  <?php if ( count( $trainings->posts ) > 0 ): ?>
    <?php foreach ( $trainings->posts as $key => $training ): ?>
      <?php 
      $color = get_field( 'card_color', $training->ID );
      $title = get_field( 'card_title', $training->ID );
      $description = get_field( 'card_description', $training->ID );
      ?>

      <?php if ( $counter == 1 ): ?>
        <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">
          <div class="row">
          <?php endif ?>
          <div class="col-md-3 treinamento-item bg-yellow">
            <div class="row">
              <div class="col-12 title-treinamentos" style="background: <?php echo $color ?>">
                <h1><?php echo $title ?></h1>
              </div>
              <div class="col-12 description-treinamentos">
                <p><?php echo $description ?></p>
              </div>
              <div class="col-12 btn-align"><a type="button" class="btn btn-light btn-know" href="<?php echo get_permalink( $training->ID ) ?>">Conheça</a></div>
            </div>
          </div>


      <?php if ($counter == $cols): ?>
          </div>
          <!--.row-->
        </div>
      <?php endif ?>

      <?php 
      $counter++;

      if($counter == $cols) $counter = 1;
      ?>

      <!--.item-->
    <?php endforeach ?>

  <?php else: ?>
    <p>Nenhum treinamento encontrado.</p>
  <?php endif ?>
</div>
<!--.carousel-inner-->