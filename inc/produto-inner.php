<div class="row products-inner">
    <?php if(isset($products->posts)) : ?>
        <?php if( count( $products->posts ) > 0 ): ?>
          <?php foreach ( $products->posts as $key => $p ): ?>
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
          <div class="col col-sm-12" class="products-inner">
            <p>Nenhum produto encontrado.</p>
          </div>
        <?php endif; ?> 
        <?php else: ?>
            <div class="row products-inner">
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
          <div class="col col-sm-12" class="products-inner">
            <p>Nenhum produto encontrado.</p>
          </div>
        <?php endif; ?> 
      </div>
        <?php endif; ?> 
      </div>