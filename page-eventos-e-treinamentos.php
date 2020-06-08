<?php
/**
 *
 * @package IEG
 * @subpackage Data Cartês
 * @since 1.0.0
 */

get_header();

$parceiros = get_field('parceiros', $post->ID);
?>

<!-- ============ BANNER ============= -->
<main>

  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Eventos e Treinamentos</h1>
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
          <li class="breadcrumb-item" style="font-weight: 900"><a href="#">Para sua empresa</a></li>
          <li class="breadcrumb-item active" aria-current="page">Eventos e treinamentos</li>
        </ol>
      </nav>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 title-events">
          <h2>Eventos</h2>
          <p>Com o objetivo de proporcionar a troca de experiências e informações entre executivos e profissionais e fomentar o mercado nacional, o IEG realiza 3 grandes eventos anuais, além de dar suporte a empresas de diversos setores através da mediação de grupos de discussão.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_template_part('inc/carousel-events'); ?>
<?php get_template_part('inc/carousel-treinament'); ?>
<?php if($parceiros != null && count($parceiros) > 0): ?>
  <section id="empresas-parceiras">
    <div class="container">
      <div class="row">
        <div class="col-12 title-parceiros">
          <h1> Empresas Parceiras </h1>
        </div>
        
        <?php foreach ( $parceiros as $key => $parceiro ): ?>
          <div class="col-md-3 parceiros">
            <img src="<?= $parceiro['logo']['url'] ?>">

          </div>
        <?php endforeach ?>

  </div>
  </div>
  </section>
<?php endif; ?>
<?php get_template_part('inc/depoimentos'); ?>
<?php get_template_part('inc/contact'); ?>

</main>


<?php
get_footer();
