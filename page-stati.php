<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
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
							<ul class="articles row">		
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=7&nopaging=1' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
	<li class="articles__item col-12 col-md-6 col-lg-4">
<a href="<?php the_permalink(); ?>" class="articles__link animate">
<?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'articles__picture') ); ?>
                                            <span class="articles__text text">
                                                <span class="articles__title subheading"><?php the_title(); ?></span>
                                                <span class="articles__span caption">подробнее</span>
                                            </span>
</a>
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