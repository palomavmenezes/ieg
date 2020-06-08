<?php get_header();
  global $post;

  $products = get_field( 'hilighted_products', $post->ID );
?>

<!-- !!!!! ============ AQUI COMEÇA O CONTEÚDO DA PÁGINA ============ !!!! -->

<main id="pra-voce">

	<section class="banner-home">
		<div class="container-fluid">
			<div class="row b-home-slides">
				<div class="col-md-12">
					<h1>Turmas abertas</h1>
					<h6>Lorem Ipsum is simply dummy text of the printing<br> and typesetting industry. Lorem Ipsum has been the<br> industry's standard dummy.</h6>
					<a href=""><button class="btn slide-home">
						Saber mais
					</button></a>
				</div>
			</div>
		</div>
	</section>

	<!-- ========== BREADCRUMB ========== -->

  <section id="breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900">Cursos</li>
        </ol>
      </nav>
    </div>
  </section>

<!------- INÍCIO DA CURSOS EM DESTAQUE --------->
	<section id="cursosemdestaque">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
				</div>
				<div class="col-md-3">
					 <input type="text" id="txtBusca" placeholder="Filtrar por interesses"/>
				</div>
			</div>

		  <div class="row">
        <?php if( count( $products ) > 0 ): ?>
          <?php foreach ( $products as $p ): ?>
            <?php 
              $product = wc_get_product( $p->ID );
            ?>
            <div class="col col-sm-4 bloco-cursos">
              <div class="row">
                <div class="col-12 photo-cursos"><a href="<?= get_permalink( $product->get_id() ) ?>"><img src="<?php echo get_the_post_thumbnail_url( $product->get_id() ) ?>"></a></div>
                <div class="col-12"><h6 class="title-bloco"><a href="<?= get_permalink( $product->get_id() ) ?>"><?= $product->get_name() ?></a></h6></div>

                <!-- <ul class="col-12 stars woocommerce">
                  <li>
                    <?php if (true) :

                      $average = $product->get_average_rating();
                    ?>
                    <?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>'; ?>
                    <?php endif; ?>
                  </li>
                </ul> -->

                <ul class="woocommerce">
<li>
    <?php $average = $product->get_average_rating();

     ?>
    <?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>'; ?>

</li>
</ul>

                <div class="col-12"><p class="text-bloco"><a href="<?= get_permalink( $product->get_id() ) ?>"><?= $product->post->post_excerpt ?></a></p></div></a>
              </div>

              <div class="row btn-comprar">
                <div class="col-5"><a href="<?= get_permalink( $product->get_id() ) ?>"><p class="valor-curso"><?= $product->get_price_html() ?></p></p></div>
                
                <div class="col-7">
                  <a class="buy" href="<?= get_permalink( $product->get_id() ) ?>">Comprar</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php else: ?>
          <div class="col col-sm-12">
            <p>Nenhum produto encontrado.</p>
          </div>
        <?php endif; ?> 
      </div>

		



		</div>
	</section>
<!------- FIM DA SEÇÃO CURSOS EM DESTAQUE --------->

<?php get_template_part('inc/depoimentos'); ?>
<?php get_template_part('inc/contact'); ?>


</main>

<script>
	$('.carousel').carousel()
</script>

<?php
get_footer();
