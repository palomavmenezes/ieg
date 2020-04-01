<?php
/**
 * The template for displaying all single posts
 *
 * @link https://datacartes.com.br
 *
 * @package Data Cartês
 * @subpackage IEG
 * @since 1.0.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content( __( 'Continue reading', 'ieg' ) );

				
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
