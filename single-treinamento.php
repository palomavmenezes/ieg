<?php
global $post;

$description_title = get_field( 'description_title', $post->ID );
$description_text = get_field( 'description_text', $post->ID );
$objective_text = get_field( 'objective_text', $post->ID );
$training_text = get_field( 'training_text', $post->ID );
$companies = get_field( 'companies', $post->ID );
$descriptionnumeros = get_field( 'descriptionnumeros', $post->ID ); 
$number_colum_one = get_field( 'number_colum_one', $post->ID );
$number_colum_two = get_field( 'number_colum_two', $post->ID );
$number_colum_thre = get_field( 'number_colum_thre', $post->ID );
$title_number_one = get_field( 'title_number_one', $post->ID );
$title_number_two = get_field( 'title_number_two', $post->ID );
$title_number_thre = get_field( 'title_number_thre', $post->ID ); 
$description_number_one = get_field( 'description_number_one', $post->ID );
$description_number_two = get_field( 'description_number_two', $post->ID );
$description_number_thre = get_field( 'description_number_thre', $post->ID );
$imagem_banner = get_field( 'imagem_banner', $post->ID );

get_header();
?> 

<main id="page-treinamento-interna">

 <section class="banner-treinamento-interna" style="background-size: cover !important; background: url(<?php echo $imagem_banner; ?>) right no-repeat;">
  <div class="container-fluid">
   <div class="row b-home-slides">
    <div class="col-md-12">
     <h1><?php  echo $post->post_title ?></h1>
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
     <li class="breadcrumb-item"><a href="#">Para sua Empresa</a></li>
     <li class="breadcrumb-item"><a href="#">Eventos e Treinamentos</a></li>
     <li class="breadcrumb-item"><a href="#">Treinamentos</a></li>
     <li class="breadcrumb-item active" aria-current="page" style="font-weight: 900"><a href="#">Para Aprimorar a Comunicação</a></li>
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
     <h2><?php echo $description_title ?></h2>
     <h6><?php echo $description_text ?></h6>
   </div>
 </div>
</div>
</section>
<!------- FIM DA SEÇÃO IMERÇÃO --------->


<!-- <section id="bloco-pesquisa">
  <div class="container">
   <div class="row bg-treinamento-interno">
    <div class="col-md-5 pesquisa">
     <h3 class="titles-sua-empresa">Objetivo</h3>
     <p class="description-sua-empresa"><?php echo $objective_text ?></p>
     <h3 class="titles-sua-empresa">O treinamento </h3>
     <p class="description-sua-empresa"><?php echo $training_text ?></p>
     <button type="button" class="btn btn-light btn-events" style="width: 230px; height: 50px; font-size: 18px; padding: 0px;">Ver mais</button>
   </div>

   <div class="col-md-7 img-pesquisa">
   </div>
 </div>
</div>
</section> -->

<section id="our-numbers">
  <div class="container">
   <div class="row">
    <div class="col-12 title">
     <h2>Nossos números</h2>
     <p><?php echo $descriptionnumeros ?></p>
   </div>
 </div>
 <div class="row">
  <div class="col numbers-title">
   <h3><?php echo $number_colum_one ?></h2>
   <h6><?php echo $title_number_one ?></h6>
   <p><?php echo $description_number_one ?></p></div>
   <div class="col numbers-title">
    <h2><?php echo $number_colum_two ?></h2>
    <h6><?php echo $title_number_two ?></h6>
    <p><?php echo $description_number_two ?></p></div>
    <div class="col numbers-title">
     <h2><?php echo $number_colum_thre ?></h2>
     <h6><?php echo $title_number_thre ?></h6>
     <p><?php echo $description_number_thre ?></p></div>
   </div>
 </div>
</section>

<?php if($companies != null && count($companies ) > 0 ): ?>
<section id="empresas-parceiras">
    <div class="container">
      <div class="row">
        <div class="col-12 title-parceiros">
          <h2> Empresas que já treinamos </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <?php foreach ($companies  as $company) : ?>
        <div class="col-md-3 parceiros">
          <img src="<?= $company['logo'] ?>">
        </div>
        
        <?php endforeach ?>       
      </div>
    </div>
  </section>
  <?php endif; ?>

<?php get_template_part('inc/depoimentos'); ?>
<?php get_template_part('inc/contact'); ?>

<!-- !!!!!INÍCIO DO CAROUSEL TREINAMENTOS!!!!! -->

<?php get_template_part('inc/carousel-treinament'); ?>
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
           <div class="col-12 title-treinamentos"><h3>Para aumentar a produtividade</h3></div>
            <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
            <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
          </div>
        </div>
        <div class="col-md-12 bg-green">
         <div class="row">
          <div class="col-12 title-treinamentos"><h3>Para analisar dados de forma precisa</h3></div>
           <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
           <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
         </div>
       </div>
       <div class="col-md-12 bg-blue">
        <div class="row">
         <div class="col-12 title-treinamentos"><h3>Para criar uma cultura eficaz</h3></div>
          <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
          <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
        </div>
      </div>
      <div class="col-md-12 bg-purple">
       <div class="row">
        <div class="col-12 title-treinamentos"><h3>Para aprimorar a comunicação</h3></div>
         <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
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
     <div class="col-12 title-treinamentos"><h3>Para aumentar a produtividade</h3></div>
      <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
      <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
    </div>
  </div>
  <div class="col-md-12 bg-green">
   <div class="row">
    <div class="col-12 title-treinamentos"><h3>Para analisar dados de forma precisa</h3></div>
     <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
     <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
   </div>
 </div>
 <div class="col-md-12 bg-blue">
  <div class="row">
   <div class="col-12 title-treinamentos"><h3>Para criar uma cultura eficaz</h3></div>
    <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
  </div>
</div>
<div class="col-md-12 bg-yellow">
 <div class="row">
  <div class="col-12 title-treinamentos"><h3>Para aprimorar a comunicação</h3></div>
   <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
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

</main>

<script>
 $('.carousel').carousel()
</script>

<?php
get_footer();
