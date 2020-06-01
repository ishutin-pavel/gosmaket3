<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gosmaket
 */

get_header();
?>
                    <div class="page__row page__row--cover" style="background-image: url(<?php the_field('stati_image'); ?>);">
                        <div class="page__cell">
                            <div class="cover">
                                <h1 class="cover__headline headline headline--h3"><?php the_field('stati_title'); ?></h1>
                            </div>
                        </div>
                    </div>
	     <div class="page__row">
                        <div class="page__cell">
                            <div class="page__block">
                                <div class="price">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                                </div>
                            </div>
                        </div>
                    </div>


<?php
get_footer();
