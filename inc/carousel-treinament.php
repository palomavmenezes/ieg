<?php 
  $terms = get_terms([
    'taxonomy' => 'cat_treinamento',
    'hide_empty' => false
  ]);


  if (! wp_doing_ajax()) {
    $trainings = new WP_Query([
      'post_type' => 'treinamento',
      'posts_per_page' => -1
    ]);
  }

?>

<section id="treinamentos">
  <div class="container">
    <div class="row">
      <div class="col-md-12 title-events">
        <h1>Treinamentos</h1>
        <p style="color: #000;">Com o objetivo de proporcionar a troca de experiências e informações entre executivos e profissionais e fomentar o mercado nacional, o IEG realiza 3 grandes eventos anuais, além de dar suporte a empresas de diversos setores através da mediação de grupos de discussão.</p>
      </div>
        <?php if ( count( $terms ) > 0 ): ?>
          <?php foreach ( $terms as $term ): ?>
            <div class="col-md-3"><button type="button" class="btn btn-light btn-treinamentos treinamento-filter" data-slug="<?php echo $term->slug ?>"><?php echo $term->name ?></button></div>
          <?php endforeach ?>
        <?php endif ?>
    </div>
  </div>
</section>
</main>
<section id="carousel-treinamentos" class="desktop">
  <div class="container">
    <div class="col-md-1 arrows">
      <a class="carousel-control-prev" href="#treinamentosCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#treinamentosCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row blog">
      <div class="col-md-12">
        <div id="treinamentosCarousel" class="carousel slide" data-ride="true">
          <!-- Carousel items -->
          <?php require 'carousel-inner-treinamentos.php' ?>
        </div>
        <!--.Carousel-->
      </div>
    </div>
  </div>
</section>
<!-- ============= CAROUSEL TREINAMENTOS MOBILE =========== -->
<section id="carousel-treinamentos" class="mobile">
  <div class="container">
    <div class="row treinamentos">
      <div class="col-md-12">
        <div id="treinamentosCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-12 bg-yellow">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para aumentar a produtividade
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
                <div class="col-md-12 bg-green">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para analisar dados de forma precisa
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
                <div class="col-md-12 bg-blue">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para criar uma cultura eficaz
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
                <div class="col-md-12 bg-purple">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para aprimorar a comunicação
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
              </div>
              <!--.row-->
            </div>
            <!--.item-->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-12 bg-purple">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para aumentar a produtividade
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
                <div class="col-md-12 bg-green">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para analisar dados de forma precisa
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
                <div class="col-md-12 bg-blue">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para criar uma cultura eficaz
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
                <div class="col-md-12 bg-yellow">
                  <div class="row">
                    <div class="col-12 title-treinamentos">
                      <h1>
                      Para aprimorar a comunicação
                    </div>
                    <div class="col-12 description-treinamentos">
                      <p>Breve descrição do evento</p>
                    </div>
                    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
                  </div>
                </div>
              </div>
              <!--.row-->
            </div>
            <!--.item-->
            <!--.carousel-inner-->
            <!--.Carousel-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END CAROUSEL TREINAMENTOS MOBILE -->
<script>
   $('.treinamento-filter').on('click', function() {
    var term = $(this).data('slug');

    $('.treinamento-filter').removeClass('active');

    $(this).addClass('active');

    if (term) {
      $.ajax({
        url: "<?php echo admin_url('admin-ajax.php') ?>",
        type: 'post',
        dataType: 'json',
        data: {
          term: term,
          action: 'filter_treinamentos',
        },
        success: function(response) {
          if (response.success) {
            $('#treinamentosCarousel .carousel-inner').remove();

            $('#treinamentosCarousel').append(response.data.html);
          }
        }
      });
    }
  });

  $('.carousel').carousel({
    pause: true,
    interval: false
  });
</script>