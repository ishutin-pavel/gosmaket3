<?php
/*
Template Name: services
*/
get_header(); // Подключаем хедер?> 
                    <div class="page__row page__row--cover" style="background-image: url(<?php the_field('services_image'); ?>);">
                        <div class="page__cell">
                            <div class="cover">
                                <h1 class="cover__headline headline headline--h3"><?php the_field('services_title'); ?></h1>
							</div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="page__block">
                                <ul class="services">
								<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=5&nopaging=1' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
 <li class="services__item">
<h4 class="services__title title"><?php the_title(); ?></h4>
<span class="services__link line"></span>
<div class="services__subtitle subtitle"><?php the_content(); ?></div>
<div class="row">
<div class="col-12 col-lg-4">
<?php if( have_rows('service_content') ): ?>
	<ul class="services__list list">
	<?php while( have_rows('service_content') ): the_row(); 
		// переменные
		$content = get_sub_field('service_text');
		?>
		<li class="list__item">
				<span class="list__span"><?php echo $content; ?></span>   
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
</div>
                                            <div class="col-12 col-lg-8">
                                                <div class="portfolio owl-carousel owl-theme">

                                                            <?php
															
// переменные
$tagname = get_field('service_category');
	foreach( $tagname as $tagname ):
$query2 = new WP_Query( array( 'tag_id' => $tagname,'nopaging=1' ) ); 
	endforeach;
if( $query2->have_posts() ){
	while( $query2->have_posts() ){
		$query2->the_post();?>
<div class="portfolio__item">
<a href="#" class="portfolio__link">
<a href="<?php the_permalink(); ?>" class="works__link animate">
<?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'works__picture') ); ?>										
     <span class="works__text text">
     <span class="works__title article-text"><?php the_title(); ?></span>
     <span class="works__span caption"><?php 
$posttags = get_the_tags();
$count=0;
if ($posttags) {
  foreach($posttags as $tag) {
	$count++;
	if (1 == $count) {
	  echo $tag->name . ' ';
	}
  }
} ?></span>
</span>
</a>
</a>
</div>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'Записей нет.';
?>

                                                </div>
                                            </div>
<?php 
$posttags = get_the_tags();
$count=0;
if ($posttags) {
  foreach($posttags as $tag) {
	$count++;
	if (1 == $count) {
	  echo $tag->name . ' ';
	}
  }
} ?>
<?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
	echo $tag->name . ' '; 
  }
}
?>
</div>
</li>


<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'Записей нет.';
?>
</ul>
                            </div>
                        </div>
                    </div>



<?php get_footer(); // Подключаем футер ?>