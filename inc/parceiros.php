<?php 
  global $post;

  $parceiros = new WP_Query([
    'post_type' => 'parceiro',
    'posts_per_page' => -1
  ]);

?>

<?php if($parceiros != null): ?>
  <section id="empresas-parceiras">
    <div class="container">
      <div class="row">
        <div class="col-12 title-parceiros">
          <h2> Empresas Parceiras </h2>
        </div>
        
        <?php foreach ( $parceiros->posts as $parceiro ): ?>
          <div class="col-md-3 parceiros">
            <img src="<?= get_the_post_thumbnail_url($parceiro->ID) ?>">

          </div>
        <?php endforeach ?>

  </div>
  </div>
  </section>
<?php endif ?>