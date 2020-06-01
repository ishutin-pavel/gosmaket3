<?php
/*
Template Name: portfolio
*/
get_header(); // Подключаем хедер?> 
                    <div class="page__row page__row--cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/pic/portfolio-bg.jpg);">
                        <div class="page__cell">
                            <div class="cover">
                                <h1 class="cover__headline headline headline--h3">PORTFOLIO</h1>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="page__block">
                                <div class="tabs">
                                    <ul class="tabs__header">
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Show all</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Creating Architectural</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Interactive</span>
                                            </button>
                                        </li>
										<li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Sample</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Landscape</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Interior</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Non-standard - model</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Master Plan Models</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Gift</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Industrial</span>
                                            </button>
                                        </li>
                                        <li class="tabs__btn">
                                            <button class="btn btn--quaternary btn--min-width btn--md">
                                                <span class="btn__text">Learning Purposes</span>
                                            </button>
                                        </li>
                                    </ul>
	<div class="tabs__body">
<div class="tabs__item">
<ul class="works row">		
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=2&nopaging=1&orderby=date&order=desc' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=architectural&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=interactive&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=interior&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=landscaping&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=models&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=non-standard&nopaging=1&order=asc' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=planning&nopaging=1&order=asc' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=gift&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=industrial&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
<div class="tabs__item">
<ul class="works row">
<?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'tag=training&nopaging=1' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();?>
	<li class="works__item col-12 col-md-6 col-xl-4">
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
</li>
		<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'No entries.';
?>
</ul>
</div>
    </div>
                                </div> 
                            </div>
                        </div>
                    </div>



<?php get_footer(); // Подключаем футер ?>
