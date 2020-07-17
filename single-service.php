<?php 
/*
Template Name: услуга
Template Post Type: post
*/

get_header();
?>
                    <div class="page__row page__row--cover" style="background-size: cover; background-image: url(<?php the_field('service_image'); ?>);">
                        <div class="page__cell">
                            <div class="cover">
                                <h1 class="cover__headline headline headline--h3"><?php the_field('service_title'); ?></h1>
                            </div>
                        </div>
                    </div>


	<?php if( have_rows('service_content_img') ): ?>
						<div class="page__row">
                        <div class="page__cell">
                            <div class="page__block">
	<?php while( have_rows('service_content_img') ): the_row(); 
		// переменные
		$title = get_sub_field('service_content_title_left');
		$image = get_sub_field('service_content_image_title_right');
		$content = get_sub_field('service_content_text_left');
		
		$title2 = get_sub_field('service_content_title_right');
		$image2 = get_sub_field('service_content_image_title_left');
		$content2 = get_sub_field('service_content_text_right');
		
		$title3 = get_sub_field('service_content_title_left_2');
		$image3 = get_sub_field('service_content_image_title_right_2');
		$content3 = get_sub_field('service_content_text_left_2');
				
		?>
		<?php if( get_sub_field('service_block_1') ): ?>
		     <div class="service">
            <div class="row">
				         <div class="col-12 col-md-6">
                                            <h2 class="service__title title title--mr"><?php echo $title; ?></h2>
                                            <?php echo $content; ?>
                                            <a href="/kalkuljator/" class="btn btn--default btn--md btn--margin">
                                                <span class="btn__text">Request for a quote</span>
                                            </a>
                        </div>  
						        <div class="col-12 col-md-6">
                                            <img src="<?php echo $image; ?>" alt="" class="service__picture">
                                </div>
		</div>
		</div>
		<?php endif; ?>
		<?php if( get_sub_field('service_block_2') ): ?>
		                                <div class="service">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <img src="<?php echo $image2; ?>" alt="" class="service__picture">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <h3 class="service__title title title--mr"><?php echo $title2; ?></h3>
                                           <?php echo $content2; ?>
                                            <a href="/kalkuljator/" class="btn btn--default btn--md btn--margin">
                                                <span class="btn__text">Request for a quote</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
								<?php endif; ?>
								<?php if( get_sub_field('service_block_3') ): ?>
						<div class="service">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <h3 class="service__title title title--mr"><?php echo $title3; ?></h3>
											<?php echo $content3; ?>                                           
													<a href="/kalkuljator/" class="btn btn--default btn--md btn--margin">
                                                <span class="btn__text">Request for a quote</span>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <img src="<?php echo $image3; ?>" alt="СТОИМОСТЬ ПРОМЫШЛЕННОГО МАКЕТА" class="service__picture">
                                        </div>
                                    </div>
                                </div>
								<?php endif; ?>
	<?php endwhile; ?>
	                        </div>
                        </div>
                    </div>
<?php endif; ?>



<?php
get_footer();
