<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gosmaket
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('', true, 'right'); ?></title>
  <script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="<?php echo get_template_directory_uri(); ?>/_fonts.min.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NTD3D65');</script>
  <!-- End Google Tag Manager -->
	 <?php wp_head(); ?>
</head>

<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTD3D65"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
        <div class="page">
            <div class="page__row page__row--wrapper">
                <div class="page__cell page__cell--fluid">
                    <div class="page__row page__row--nav page__row--bg-white">
                        <div class="page__cell">
                            <nav class="nav">
                                <a href="/" class="nav__brand brand">
                                    <img src="<?php echo get_template_directory_uri();?>/img/svg/logo.svg" alt="Brand" class="brand__picture">
                                </a>
                                <ul class="nav__menu" id="nav__menu">
                                    <li class="nav__item">
                                        <div class="nav__button" data-target="#nav__menu">
                                            <button type="button" class="btn-nav">
                                                <span class="btn-nav__line btn-nav__line--active"></span>
                                                <span class="btn-nav__line btn-nav__line--active"></span>
                                                <span class="btn-nav__line btn-nav__line--active"></span>
                                                <span class="btn-nav__line btn-nav__line--active"></span>
                                                <span class="btn-nav__line btn-nav__line--active"></span>
                                                <span class="btn-nav__line btn-nav__line--active"></span>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="nav__item">
                                        <a href="/" class="nav__link">Home</a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="/uslugi-maketnoj-masterskoj" class="nav__link">Services</a>
                                        <span class="nav__level">
                                            <span class="nav__level-plus">+</span>
                                        </span>
                                        <ul class="nav__dropdown dropdown">
<?php
// указываем категорию 6 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=6&nopaging=1' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
	<li class="dropdown__item">
<a href="<?php the_permalink(); ?>" class="dropdown__link"><?php the_title(); ?></a>
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
</li>
<?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else
	echo 'Записей нет.';
?>
                                        </ul>
                                    </li>
                                    <li class="nav__item">
                                        <a href="/portfolio" class="nav__link">Portfolio</a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="/kontakty" class="nav__link">Contact us</a>
                                    </li>
                                    <li class="nav__item nav__item--contacts d-block d-lg-none">
                                        <a href="tel:+971543219015" class="nav__tel tel tel--nav">+971 54 321 9015</a>
                                        <a href="/kalkuljator" class="nav__btn btn btn--primary btn--min-width btn--sm">
										<span class="btn__text ubtn-link">Request for a quote</span>
                                        </a>
                                        <div class="nav__loc">
                                            <ul class="loc">
                                                <li class="loc__item">
                                                    <span class="loc__icon loc__icon--2"></span>
                                                    <span class="loc__text">
                                                        <span class="loc__span loc__span--primary">UAE, Sharjah</span>
                                                        <span class="loc__span loc__span--secondary">Crescent House, 9th floor</span>
                                                    </span>
                                                </li>
                                                <li class="loc__item">
                                                    <span class="loc__icon loc__icon--1"></span>
                                                    <span class="loc__text">
                                                        <span class="loc__span loc__span--primary">Russia, Rostov-on-Don</span>
                                                        <span class="loc__span loc__span--secondary">per. Machine Building, 11</span>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="loc">
												<li class="loc__item">
                                                    <span class="loc__icon loc__icon--3"></span>
                                                    <span class="loc__text">
                                                        <span class="loc__span loc__span--primary">Russia, Moscow</span>
                                                        <span class="loc__span loc__span--secondary">st. Amur, 2</span>
                                                    </span>
                                                </li>
                                                <li class="loc__item">
                                                    <span class="loc__icon loc__icon--2"></span>
                                                    <span class="loc__text">
                                                        <span class="loc__span loc__span--primary">Russia, St. Petersburg</span>
                                                        <span class="loc__span loc__span--secondary">st. Podvoisky, 14/1</span>
                                                    </span>
                                                </li>
                                                
												<li class="loc__item">
                                                    <span class="loc__icon loc__icon--5"></span>
                                                    <span class="loc__text">
                                                        <span class="loc__span loc__span--primary">Russia, Stavropol</span>
                                                        <span class="loc__span loc__span--secondary">st. Breeding, 6</span>
                                                    </span>
                                                </li>
												<li class="loc__item">
                                                    <span class="loc__icon loc__icon--4"></span>
                                                    <span class="loc__text">
                                                        <span class="loc__span loc__span--primary">Russia, Krasnodar</span>
                                                        <span class="loc__span loc__span--secondary">st. Tchaikovsky, 25</span>
                                                    </span>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </li>
                                </ul>
                                <span class="nav__bg" data-target="#nav__menu"></span>
                                <a href="tel:+971543219015" class="nav__tel tel">+971 54 321 9015</a>
                                <a href="/kalkuljator/" class="nav__btn btn btn--primary btn--min-width btn--sm">
                                    <span class="btn__text ubtn-link">Request for a quote</span>
                                </a>
                                <ul class="nav__share share">
                                    <li class="share__item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/share.svg" alt="share" class="share__picture">
                                    </li>
                                    <li class="share__item share__item--social">
                                        <ul class="share__social social">
                                            <li class="social">
                                                <a href="https://www.youtube.com/channel/UCusWg0hndMYC7nrRdmviq9g" target="_blank" class="social__link social__link--yt"></a>
                                            </li>
                                            <li class="social">
                                                <a href="https://www.instagram.com/gosmaket.ru/" target="_blank" class="social__link social__link--in"></a>
                                            </li>
                                            <li class="social">
                                                <a href="https://vk.com/gosmaket" target="_blank" class="social__link social__link--vk"></a>
                                            </li>
                                            <li class="social">
                                                <a href="https://www.facebook.com/gosmaket" target="_blank" class="social__link social__link--fb"></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
<?php /*
                                <ul class="nav__lang lang">
                                    <li class="lang__item">
                                        <a href="#" class="lang__link">En</a>
                                    </li>
                                    <li class="lang__item">
                                        <a href="#" class="lang__link">Ру</a>
                                    </li>
                                </ul>
 */ ?>
                                <div class="nav__button" data-target="#nav__menu">
                                    <button type="button" class="btn-nav">
                                        <span class="btn-nav__line"></span>
                                        <span class="btn-nav__line"></span>
                                        <span class="btn-nav__line"></span>
                                        <span class="btn-nav__line"></span>
                                        <span class="btn-nav__line"></span>
                                        <span class="btn-nav__line"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div>
