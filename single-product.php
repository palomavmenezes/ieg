<?php get_header();
  global $post;

  $product = wc_get_product($post->ID);

  $add_to_cart_url = wc_get_cart_url() . '?add-to-cart=' . $product->get_id();

  // Campos Customizados
  $banner = get_field('banner', $product->get_id());
  $date = get_field('date', $product->get_id());
  $duration = get_field('duration', $product->get_id());
  $location = get_field('location', $product->get_id());
  $descriptive_title = get_field('descriptive_title', $product->get_id());
  $descriptive_text = get_field('descriptive_text', $product->get_id());
  $objective = get_field('objective', $product->get_id());
  $training = get_field('training', $product->get_id());
  $objective_section_image = get_field('objective_section_image', $product->get_id());
  $metodology_text = get_field('metodology_text', $product->get_id());
  $metodologies = get_field('metodologies', $product->get_id());
  $course_topics = get_field('course_topics', $product->get_id());
  $teachers = get_field('teachers', $product->get_id());
?> 

<!-- !!!!! ============ AQUI COMEÇA O CONTEÚDO DA PÁGINA ============ !!!! -->

<main id="page-pagina-do-curso">

  <section id="banner-pagina-do-curso" style="background: url(<?php echo $banner ?>), 0% 0% no-repeat padding-box; background-size: cover;">
    <div class="container-fluid">
      <div class="row b-home-slides">
        <div class="col-md-12">
          <h1><?php echo $product->get_name() ?></h1>
        </div>

        <div class="col-md-12 icons-cursos">
          <ul>
            <li class="fa fa-calendar" style="margin:0px;">
              <li><?php echo $date ?></li>
            </li>

            <li class="fa fa-clock-o" style="margin:0px;">
              <li><?php echo $duration ?></li>
            </li>

            <li class="fa fa-map-marker" style="margin:0px;">
              <li><?php echo $location ?></li>
            </li>
          </ul>
        </div>

        <div class="col-md-12 btn-banner">
          <button type="button" class="btn btn-yellow">Agende uma conversa</button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========= INÍCIO BREADCRUMB ========= -->
   <section id="breadcrumb">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Cursos</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900"><?php echo $product->get_name() ?></li>
          </ol>
        </nav>
      </div>
    </section>
      <!-- ========= FIM BREADCRUMB ========= -->

<!------- SEÇÃO IMERÇÃO --------->
  <section id="pq-estudar">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <?php if( $descriptive_title ): ?>
            <h1>
              <?php echo $descriptive_title ?>
            </h1>
          <?php endif; ?>

          <?php if( $descriptive_text ): ?>
            <h6>
              <?php echo $descriptive_text ?>
            </h6>
          <?php endif; ?>          
        </div>
      </div>
    </div>
  </section>
<!------- FIM DA SEÇÃO IMERÇÃO --------->


  <section id="bloco-pesquisa">
    <div class="container">
      <div class="row bg-treinamento-interno">
        <div class="col-md-5 pesquisa">
          <?php if ( $objective ): ?>
            <h3 class="titles-sua-empresa">Objetivo</h3>

            <p class="description-sua-empresa"><?php echo $objective ?></p>
          <?php endif ?>

          <?php if ( $training ): ?>
            <h3 class="titles-sua-empresa">O treinamento</h3>

            <p class="description-sua-empresa"><?php echo $training ?></p>
          <?php endif ?>

          <a href="<?php echo $add_to_cart_url ?>" class="btn btn-light btn-events" style="width: 230px; display: inline-block; line-height: 50px; height: 50px; font-size: 18px; padding: 0px;">Inscreva-se agora</a>
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
          <h1>Metotologia</h1>

          <p><?php echo $metodology_text ?></p>

          <?php if ( count( $metodologies ) > 0 ): ?>
            <?php foreach ( $metodologies as $metodology ): ?>
              <h3><?php echo $metodology['title'] ?></h3>
              <h6><?php echo $metodology['description'] ?></h6>
            <?php endforeach ?>
          <?php endif ?>
        </div>
        <div class="col-md-6">
          <div class="row cursos">
            <div class="col-12 photo-cursos"><img src="<?php echo get_the_post_thumbnail_url( $product->get_id() ) ?>"></a></div>
            <div class="col-12"><p class="text-bloco" style="margin-top: 20px;">Dê o próximo passo na sua carreira com o <?php echo $product->get_name() ?></p></div>
            <div class="col-12"><h6 class="price"><?php echo $product->get_price_html() ?></h6></div>
            <!-- <div class="col-12"><p class="parcel-price">12 x de R$ 301,67</p></div> -->
            <div class="col-12"><a  href="<?php echo $add_to_cart_url ?>" class="btn btn-blue">Inscreva-se agora</a></div>
            <div class="col-12"><p class="text-bloco" style="margin-bottom: 10px;">Turma com vagas limitadas!</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php if ( count( $course_topics ) > 0 ): ?>
    <section id="materias">
      <div class="container">
        <div class="row">
          <div class="col-md-8 title">
            <h1>O que você vai aprender</h1>
            <ul class="to-know">
              <?php foreach ( $course_topics as 
                $topic ): ?>
                <li><?php echo $topic['topic'] ?></li>
              <?php endforeach ?>
            </ul>
          </div>
          <div class="col-md-4"></div>
      </div>
    </section>
  <?php endif ?>

  <?php if ( count( $teachers ) > 0 ): ?>
    <section id="professores">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title">
            <h1>Professores</h1>
            <h6>Nossos professores ensinam a noite o que fazem durante o dia. Trazem toda sua experiência de mercado para te ajudar a chegar onde você merece</h6>
          </div>
        </div>

        <div class="row">
          <?php foreach ( $teachers as $teacher ): ?>
            <div class="col-md-4 teacher">
              <img src="<?php echo get_the_post_thumbnail_url( $teacher->ID ) ?>">
              <h3><?php echo $teacher->post_title ?></h3>
              <h6><?php echo get_field( 'profession', $teacher->ID ) ?></h6>
              <div class="row">
                <div class="col-md-12 social-icon">

                  <?php $linkedin = get_field('linkedin', $teacher->ID); ?>

                  <?php if ( $linkedin ): ?>
                    <a href="<?php echo $linkedin ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-clean.png"></a>
                  <?php endif ?>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        <div class="row">
          <div class="col-md-12 view-teachers">
            <button type="button" class="btn btn-blue">Ver mais professores</button>
        </div>
      </div>
    </section>
  <?php endif ?>

<?php get_template_part('inc/depoimentos'); ?>

  <!-- <section id="investiment">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h1>Investimento</h1>
        </div>

        <div class="col-md-12 title">
          <h1>aqui vai entrar o pagamento</h1>
        </div>
      </div>
    </div>
  </section> -->

  <section id="perguntas-frequentes">
    <div class="container">
      <div class="row">
        <div class="col-md-12 title">
          <h1>Perguntas frequentes:</h1>
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
