<?php 
/*
Template Name: статьи
Template Post Type: post
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
							<div class="article__block__stati">
									<?php while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>
										<? endwhile;?>
                                            </div>
                                <div class="article">
								
									<?php if( have_rows('stati_content') ): ?>
	<?php while( have_rows('stati_content') ): the_row(); 
		// переменные
		$title = get_sub_field('stati_title');
		$image = get_sub_field('stati_image');
		$content = get_sub_field('stati_text');
		
		$title2 = get_sub_field('stati_title_2');
		$image2 = get_sub_field('stati_image_2');
		$content2 = get_sub_field('stati_text_2');
				
		?>
		<?php if( get_sub_field('stati_block_1') ): ?>
            
									<?php if( get_sub_field('stati_image') ): ?>
									<div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="article__block">
                                                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="article__picture responsive">
                                            </div>
                                        </div>
									<?php endif; ?>									
                                        <div class="col-12 col-lg-6">
                                            <div class="article__block">
                                                <div class="title title--mr"><?php echo $title; ?></div>
											<?php echo $content; ?>
                                            </div>
                                        </div>
										</div>
			
			<?php endif; ?>
			<?php if( get_sub_field('stati_block_2') ): ?>
            <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="article__block">
                                                <div class="title title--mr"><?php echo $title2; ?></div>
										<?php echo $content2; ?>
										</div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="article__block">
                                                <img src="<?php echo $image2; ?>" alt="<?php echo $title2; ?>" class="article__picture responsive">
                                            </div>
                                        </div>
            </div>												
								
		<?php endif; ?>
	<?php endwhile; ?>
	</div>
<?php endif; ?>


                         </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <h2 class="subheading subheading--center">Similar articles</h2>
                            <span class="subheading__line"></span>
			<ul class="similar row">
											<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=7&posts_per_page=3&orderby=rand' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
	<li class="similar__item col-12 col-xl-4">
<a href="<?php the_permalink(); ?>" class="similar__link">
<?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'similar__picture') ); ?>	
<span class="similar__text">
<h3 class="similar__title body"><?php the_title(); ?></h3>
<span class="similar__date caption"><?php the_date(); ?></span>
</span>
</a>
</li>
<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'Posts not found.';
?>
</ul>


                        </div>
                    </div>
<?php
get_footer();
