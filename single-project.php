<?php 
/*
Template Name: портфолио
Template Post Type: post
*/

get_header();
?>
<div class="page__row page__row--cover" style="background-image: url(<?php the_field('post_bg'); ?>);">
                        <div class="page__cell">
                            <div class="cover">
                                <h1 class="cover__headline headline headline--h3"><?php the_field('post_title'); ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="page__block">
                                <div class="work">
                                    <div class="work__top">
                                        <div class="row">
                                            <div class="col-12 col-xl-8">
																						<?php
												$images = acf_photo_gallery('maket_gallery', $post->ID);
												if( count($images) ):
												?>													
                                <ul class="work__carousel owl-carousel owl-theme">
								<?		
													foreach($images as $image):
														$id = $image['id']; // The attachment id of the media
														$title = $image['title']; //The title
														$caption= $image['caption']; //The caption
														$full_image_url= $image['full_image_url']; //Full size image url
														$full_image_url = acf_photo_gallery_resize_image($full_image_url, 762, 508); //Resized size to 262px width by 160px height image url
														$thumbnail_image_url= acf_photo_gallery_resize_image($full_image_url, 119, 80); //Get the thumbnail size image url 150px by 150px
														$url= $image['url']; //Goto any link when clicked
														$target= $image['target']; //Open normal or new tab
														$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
														$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
											?>
								<li class="work__item" data-dot='<img draggable="false" src="<?php echo $thumbnail_image_url; ?>" alt="work" class="work__picture">'>
									<a href="<?php echo $full_image_url; ?>" class="work__link" data-fancybox="work">
									<img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" class="work__picture">
									</a>
								</li>
											<?php endforeach; ?>
											</ul>
											<? endif; ?>
                                            </div>
											<div class="col-12 col-xl-4">
                                                <ul class="work__data data">
												<?php if( get_field('maket_resize_vis') ): ?>
                                                    <li class="data__item">
                                                        <span class="data__span data__span--bold"><?php the_field('maket_resize_1'); ?></span>
                                                        <span class="data__span"><?php the_field('maket_resize'); ?></span>
                                                    </li>
												<?php endif; ?>	
												<?php if( get_field('maket_size_vis') ): ?>
                                                    <li class="data__item">
                                                        <span class="data__span data__span--bold"><?php the_field('maket_size_1'); ?></span>
                                                        <span class="data__span"><?php the_field('maket_size'); ?></span>
                                                    </li>
													<?php endif; ?>	
												<?php if( get_field('maket_time_vis') ): ?>
                                                    <li class="data__item">
                                                        <span class="data__span data__span--bold"><?php the_field('maket_time_1'); ?></span>
                                                        <span class="data__span"><?php the_field('maket_time'); ?></span>
                                                    </li>
													<?php endif; ?>	
												<?php if( get_field('maket_price_vis') ): ?>
                                                    <li class="data__item">
                                                        <span class="data__span data__span--bold"><?php the_field('maket_price_1'); ?></span>
                                                        <span class="data__span"><?php the_field('maket_price'); ?></span>
                                                    </li>
													<?php endif; ?>
                                                </ul>
												<div class="project__text">
											<?php while ( have_posts() ) : the_post(); ?>
				
								<?php the_content(); ?>
										<? endwhile;?>
										</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="cta">
                                <span class="cta__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cta.png" alt="cta" class="cta__picture">
                                </span>
                                <div class="cta__text">
                                    <h3 class="cta__title">Есть идея макета?</h3>
                                    <p class="cta__desc">Расскажите нам и мы поможем <br class="cta__br">воплотить вашу идею в реальность!</p>
                                    <a href="#" class="cta__btn btn btn--default btn--width btn--md">
                                        <span class="btn__text">Поделиться идеей</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="next">
			<?php next_post_link('<a class="next__link" %link' , '<span class="next__icon"></span> <span class="next__span caption">Следующая</span><span class="next__title">%title</span></a>', true); ?>

                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <h4 class="title title--center title--black">Вас также может заинтересовать</h4>
                            <span class="title__line"></span>

<?php $tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
'tag__in' => $tag_ids,       
'orderby'=>rand,                
'caller_get_posts'=>1,            
'post__not_in' => array($post->ID),
'showposts'=>3                      
);
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
echo '<ul class="interest row">';
while ($my_query->have_posts()) {
$my_query->the_post();
?>
<li class="interest__item col-12 col-md-6 col-xl-4"><a href="<?php the_permalink() ?>" rel="bookmark" class="interest__link" title="<?php the_title(); ?>">
<span class="interest__block">
<?php echo get_the_post_thumbnail($page->ID, 'medium', array('class' => 'interest__picture') ); ?>
</span>
<span class="interest__subheading subheading"><?php the_title(); ?></span>
</a>
</li>
<?php
}
echo '</ul>';
}
wp_reset_query();
}
?>

                        </div>
                    </div>
<?php
get_footer();
