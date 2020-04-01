<?php
global $post;

$description_title = get_field( 'description_title', $post->ID );
$description_text = get_field( 'description_text', $post->ID );
$objective_text = get_field( 'objective_text', $post->ID );
$training_text = get_field( 'training_text', $post->ID );
$companies = get_field( 'companies', $post->ID );

get_header();
?> 

<main id="page-treinamento-interna">

 <section class="banner-treinamento-interna">
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
     <h1><?php echo $description_title ?></h1>
     <h6><?php echo $description_text ?></h6>
   </div>
 </div>
</div>
</section>
<!------- FIM DA SEÇÃO IMERÇÃO --------->


<section id="bloco-pesquisa">
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
</section>

<section id="our-numbers">
  <div class="container">
   <div class="row">
    <div class="col-12 title">
     <h1>Nossos números</h1>
     <p>Writers and stars of Veep have responded incredulously to the news an Australian politician required preinstalled stitches way email client, calendar, mapping program.Writers and stars of Veep have responded incredulously to the news an Australian.</p>
   </div>
 </div>
 <div class="row">
  <div class="col numbers-title">
   <h1>1200</h1>
   <h6>sobre o número</h6>
   <p>Apresentação de cases de empresas que já possuem CSC, incentivando os participantes a resolverem um problema específico relacionado ao tema e a compartilharem práticas e soluções.</p></div>
   <div class="col numbers-title">
    <h1>1200</h1>
    <h6>sobre o número</h6>
    <p>Apresentação de cases de empresas que já possuem CSC, incentivando os participantes a resolverem um problema específico relacionado ao tema e a compartilharem práticas e soluções.</p></div>
    <div class="col numbers-title">
     <h1>1200</h1>
     <h6>sobre o número</h6>
     <p>Apresentação de cases de empresas que já possuem CSC, incentivando os participantes a resolverem um problema específico relacionado ao tema e a compartilharem práticas e soluções.</p></div>
   </div>
 </div>
</section>

<?php get_template_part('inc/clientes'); ?>
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
           <div class="col-12 title-treinamentos"><h1>Para aumentar a produtividade</div>
            <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
            <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
          </div>
        </div>
        <div class="col-md-12 bg-green">
         <div class="row">
          <div class="col-12 title-treinamentos"><h1>Para analisar dados de forma precisa</div>
           <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
           <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
         </div>
       </div>
       <div class="col-md-12 bg-blue">
        <div class="row">
         <div class="col-12 title-treinamentos"><h1>Para criar uma cultura eficaz</div>
          <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
          <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
        </div>
      </div>
      <div class="col-md-12 bg-purple">
       <div class="row">
        <div class="col-12 title-treinamentos"><h1>Para aprimorar a comunicação</div>
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
     <div class="col-12 title-treinamentos"><h1>Para aumentar a produtividade</div>
      <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
      <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
    </div>
  </div>
  <div class="col-md-12 bg-green">
   <div class="row">
    <div class="col-12 title-treinamentos"><h1>Para analisar dados de forma precisa</div>
     <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
     <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
   </div>
 </div>
 <div class="col-md-12 bg-blue">
  <div class="row">
   <div class="col-12 title-treinamentos"><h1>Para criar uma cultura eficaz</div>
    <div class="col-12 description-treinamentos"><p>Breve descrição do evento</p></div>
    <div class="col-12 btn-align"><button type="button" class="btn btn-light btn-know">Conheça</button></div>
  </div>
</div>
<div class="col-md-12 bg-yellow">
 <div class="row">
  <div class="col-12 title-treinamentos"><h1>Para aprimorar a comunicação</div>
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
