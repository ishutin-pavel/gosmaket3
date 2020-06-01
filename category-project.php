<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер?> 
<div class="page__row">
	<div class="page__cell">
		<?php if (function_exists('seorubl_breadcrumbs')) : seorubl_breadcrumbs(); endif; ?>
	</div>
</div>
<div class="page__row">
	<div class="page__cell">
		<div class="row news__row">
			<div class="col-12 col-lg-4 col-xl-3">
				 <?php get_sidebar(); ?>
			</div>
			<div class="col-12 col-lg-8 col-xl-9">
				<div class="main">
					<h2 class="main__headline headline headline--line"><?php single_cat_title();?></h2>
					<div class="main__content">
					<?php if (have_posts()) { ?>
						<ul class="news">
						<?php
							while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
							<?php get_template_part('loop-project'); // для отображения каждой записи берем шаблон loop.php ?>
							<?php endwhile; // конец цикла ?>
						</ul>
					<?php } // если записей нет, напишим "простите" ?>	 
					
					<?php pagination(); // пагинация, функция нах-ся в function.php ?>
					
					<?php
						if ( $cat_desc = category_description() )	echo '<div class="cat__desc">'. $cat_desc .'</div>';
					?>
					</div>
				</div>
			</div>	
		</div>	
	</div>
</div>	
<?php get_footer(); // Подключаем футер ?>