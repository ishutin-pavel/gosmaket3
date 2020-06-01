<?php
/*
Template Name: вакансии
*/
get_header(); // Подключаем хедер?> 
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
							 <ul class="jobs">
<?php
// указываем категорию 8 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=8&nopaging=1' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
	<li class="jobs__item">
	    <div class="jobs__block">
         <div class="jobs__header">
                <span class="jobs__arrow next__icon"></span>
                <span class="jobs__title bodybold"><?php the_field('vkancy_title'); ?></span>
                <p class="jobs__text body"><?php the_field('vakancy_time'); ?></p>
         </div>
		 <div class="jobs__body">
            <div class="jobs__in">
                <h3 class="jobs__headline headline headline--h3"><?php the_field('vakancy_content'); ?></h3>
            <ul class="jobs__btns">
                <li class="jobs__btns-item">
            <a href="#" class="btn btn--default btn--md">
            <span class="btn__text">отклик на вакансию</span>
            </a>
                </li>
                <li class="jobs__btns-item">
            <button type="button" class="btn btn--default btn--share">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" id="icons--icon-share" width="100%" height="100%"><path d="M16 14.1c-.8 0-1.4.3-2 .8l-7.2-4.2c.1-.2.2-.4.2-.7 0-.2 0-.5-.1-.7L14 5.2c.5.5 1.2.8 2 .8 1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3c0 .2 0 .5.1.7L6 7.8C5.5 7.3 4.8 7 4 7c-1.7 0-3 1.3-3 3s1.3 3 3 3c.8 0 1.5-.3 2-.8l7.1 4.2c-.1.2-.1.4-.1.7 0 1.6 1.3 2.9 2.9 2.9s2.9-1.3 2.9-2.9-1.2-3-2.8-3z"></path></svg>
            </button>
                </li>
            </ul>
<h5 class="jobs__title bodybold">Требования:</h5>
<?php if( have_rows('vakancy_block') ): ?>
	<ul class="jobs__list list">
	<?php while( have_rows('vakancy_block') ): the_row(); 
		// переменные
		$content = get_sub_field('vakancy_trebovanie');
		$title2 = get_sub_field('vakancy_title2');
		$content2 = get_sub_field('vakancy_content2');
		
		
		?>
		<li class="list__item">
				<span class="list__span"><?php echo $content; ?></span>   
		</li>

		
		
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
<?php if( have_rows('vakancy_condition') ): ?>
	<?php while( have_rows('vakancy_condition') ): the_row(); 
		// переменные
		$title2 = get_sub_field('vakancy_title2');
		$content2 = get_sub_field('vakancy_content2');
		?>
				
		<h5 class="jobs__title bodybold"><?php echo $title2; ?></h5>
		<p><?php echo $content2; ?></p>
	<?php endwhile; ?>
<?php endif; ?>		
		
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
} ?>                                                </div>
                                            </div>
                                        </div>
                                    </li>
                               

<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'Записей нет.';
?>                          </ul>
                                  </div>
                        </div>
                    </div>                              


<?php get_footer(); // Подключаем футер ?>