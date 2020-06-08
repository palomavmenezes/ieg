<?php get_header();
  global $post;

  if (! wp_doing_ajax()) {
    $products = get_field( 'hilighted_products', $post->ID );
  }
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
					 <input type="text" id="txtBusca" placeholder="Filtrar por interesses" onkeyup="fetch()" name="pinput" data-postid="<?php echo $post->ID ?>" />
				</div>
			</div>
      <div id="products">
        <?php require 'inc/produto-inner.php' ?>
      </div>

		</div>
	</section>
<!------- FIM DA SEÇÃO CURSOS EM DESTAQUE --------->

<?php get_template_part('inc/depoimentos'); ?>
<?php get_template_part('inc/contact'); ?>


</main>

<script>


  function fetch(){
    var keyword = jQuery('#txtBusca').val();
    var post_id = jQuery('#txtBusca').data('postid');
    if (keyword == '') {
      keyword = '';
    }
    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { 
          post_id: post_id,
          action: 'filter_produtos', 
          keyword: keyword
        },
        success: function(response) {
            $('#products .products-inner').remove();
            jQuery('#products').append(response.data.html);
        }
    });

}

	// $('.carousel').carousel()
</script>

<?php
get_footer();
