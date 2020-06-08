<?php 
      $depoimentos = new WP_Query([
        'post_type' => 'depoimento',
        'posts_per_page' => -1
      ]);

      $cols =  2;
      $counter = 1;      
?>

<?php if($depoimentos != null ): ?>
<section id="depoimentos" class="desktop">
  <div class="container">
    <div class="row">
      <div class="col-12 title-testemonial">
        <h2>O que nossos alunos estão falando</h2>
        <p>Curabitur in libero neque. Nulla at vestibulum massa. Fusce feugiat tellus fermen tum.massa. Fusce feugiat.</p>
      </div>

    <div class="col-md-12">
                    <div id="testemonialCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                          <?php foreach($depoimentos->posts as $key => $depoimento) : ?>
                            <?php if ( $counter == 1 ): ?>
                            <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">
                                <div class="row">
                            <?php endif ?>
                                    <div class="col-md-6 content-testemonial">
                                        <div class="row">
                                          <div class="col-md-8">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/quotation.svg"><br>
                                            <p><?= $depoimento->post_content ?></p>
                                            <h4><?= $depoimento->post_title ?></h4>
                                          </div>
<?php if(get_the_post_thumbnail_url($depoimento) ) : ?>
                                          <div class="col-md-3 photo-testemonial">
                                            <img src="<?= get_the_post_thumbnail_url($depoimento) ?>"><br>
                                          </div>
                                          <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if ($counter == $cols): ?>
                                      </div>
                                      <!--.row \\\\\\\ -->
                                    </div>
                                  <?php endif ?>

                                  <?php 
                                  $counter++;
                                  if($counter > $cols){
                                    $counter = 1;
                                  } 
                                  ?>
                            <!--.item-->
                          <?php endforeach ?>

                          

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                </div>
    </div>
    </div>
</section>

<?php endif ?>