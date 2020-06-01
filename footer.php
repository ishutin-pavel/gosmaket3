<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gosmaket
 */

?>

           <div class="page__row page__row--footer">
                <div class="page__cell">
                    <div class="footer">
                        <div class="footer__top">
                            <div class="footer__block footer__block--primary">
                                <a href="#" class="footer__brand brand">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/footer-logo.svg" alt="brand" class="brand__picture">
                                </a>
                                <p class="footer__span">We turn your ideas <br class="footer__br">into shapes</p>
                                <a class="footer__btn btn btn--default btn--md">
                                    <div id="modalbtn3" class="btn__text">ASK A QUESTION</div>
                                </a>
                            </div>
                            <div class="footer__block footer__block--secondary">
                                <div class="footer__contacts">
                                    <ul class="contacts">
                                        <li class="contacts__item">
                                            <a id="footer__phone" href="tel:+971543219015" class="contacts__link contacts__link--white">+971 54 321 9015</a>
                                        </li>
                                    </ul>
                                    <ul class="contacts">
                                        <li class="contacts__item">
                                            <a id="footer__email" href="mailto:sales@gosmaket.ae" class="contacts__link contacts__link--white">sales@gosmaket.ae</a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="footer__hr"></span>
                                <div class="footer__loc">
                                    <ul class="loc">
                                        <li class="loc__item">
                                            <span class="loc__icon loc__icon--2"></span>
                                            <span class="loc__text">
                                                <span class="loc__span loc__span--primary">UAE, Sharjah</span>
                                                <span class="loc__span loc__span--secondary">Crescent House, 9th floor</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <span class="footer__hr"></span>
                                <div class="footer__article">
                                    <div class="article">
                                        <div class="article__header">
                                            <span class="article__span">Articles</span>
                                            <a href="/stati/" class="article__more more">
                                                <span class="more__text">ALL ARTICLES</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12" class="more__icon"><defs><path id="b70sa" d="M284.69 1968.29v-2.5h8.5v8.3h-2.5v-5.8z"/></defs><g><g transform="rotate(45 2518.258 641.06)"><use xlink:href="#b70sa"/></g></g></svg>
                                            </a>
                                        </div>
                                        <div class="article__body">
                                            <ul class="article__list">
                      <?php
// указываем категорию 2 и выключаем разбиение на страницы (пагинацию)
$query = new WP_Query( 'cat=7&posts_per_page=3');
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();?>
  <li class="article__item">
<a href="<?php the_permalink(); ?>" class="article__link"><?php the_title(); ?></a>
<span class="article__date date"><?php the_date(); ?></span>
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
                            </div>
                        </div>
                        <div class="footer__lower">
                            <div class="footer__block footer__block--copy">
                                <p class="footer__copy">GOSMAKET &copy; 2012-<?php echo date("Y");?></p>
                                <a href="#" class="footer__link">Privacy policy</a>
                            </div>
                            <div class="footer__block footer__block--nav">
                                <ul class="footer__nav">
                                    <li class="footer__nav-item">
                                        <a href="/" class="footer__nav-link">Home</a>
                                    </li>
                                    <li class="footer__nav-item">
                                        <a href="/portfolio/" class="footer__nav-link">Portfolio</a>
                                    </li>
                                    <li class="footer__nav-item">
                                        <a href="/stoimost-izgotovlenija-maketa/" class="footer__nav-link">Prices</a>
                                    </li>
                                    <li class="footer__nav-item">
                                        <a href="/o-masterskoj/" class="footer__nav-link">About us</a>
                                    </li>
                                    <li class="footer__nav-item">
                                        <a href="/vakansii-maketnoj-masterskoj-gosmaket/" class="footer__nav-link">Careers</a>
                                    </li>
                                    <li class="footer__nav-item">
                                        <a href="/kontakty/" class="footer__nav-link">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Load CSS -->
        <script>
            function loadCSS(hf) {
                var ms=document.createElement("link");ms.rel="stylesheet";
                ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
            }
            loadCSS("<?php echo get_template_directory_uri(); ?>/libs/owlcarousel/owl.carousel.min.css");
            loadCSS("<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.min.css");
            loadCSS("<?php echo get_template_directory_uri(); ?>/css/animate.min.css");
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

<script>
  for (var lnk = document.links, j = 0; j < lnk.length; j++){
    if (lnk [j].href == document.URL && lnk [j].className == "nav__link") lnk [j].className += ' nav__link--active';
  }
</script>
    <script type="text/javascript">
    window.onload = function () {
        var scr = $(".owl-dots");
        scr.mousedown(function () {
            var startX = this.scrollLeft + event.pageX;
            var startY = this.scrollTop + event.pageY;
            scr.mousemove(function () {
                this.scrollLeft = startX - event.pageX;
                this.scrollTop = startY - event.pageY;
                return false;
            });
        });
        $(window).mouseup(function () {
            scr.off("mousemove");
        });
    }
  $(".owl-dots").mousedown(function(){
    return false;
});

$(window).load(function(){ $(".owl-next").click(function(e) {
  $('.owl-dots').scrollTo($(".owl-dot.active"),400);
}); });

$(window).load(function(){ $(".owl-prev").click(function(e) {
  $('.owl-dots').scrollTo($(".owl-dot.active"),400);
}); });


</script>
<div class="popup" id="popup">
<?php echo do_shortcode( '[wlgetform email="sale@gosmaket.ae"]' ); ?>
  </div>
  <div class="close" id="close"></div>
  <div class="overlay" id="overlay" style="display:none;"></div>

   <div class="popup custom-popup" id="popup2">
<iframe class="custom-iframe" id="frame__video" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div onclick="document.getElementById('frame__video').src=''" class="close" id="close2"></div>
  <div class="overlay" id="overlay2" style="display:none;"></div>

  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/formscript.js'></script>

<!-- Код отслеживание целей -->
<script>
jQuery(document).ready(function() {
  jQuery('.nav__tel').on('click', function() {
    ym(64493158,'reachGoal','goal_01');
    console.log('01 - телефон в шапке');
  });
  jQuery('.nav .nav__btn').on('click', function() {
    ym(64493158,'reachGoal','goal_02');
    console.log('02 - рассчитать макет в шапке');
  });
  jQuery('.video__play').on('click', function() {
    ym(64493158,'reachGoal','goal_03');
    console.log('03 - интерактивные макеты');
  });
  jQuery('.banner .nav__btn').on('click', function() {
  ym(64493158,'reachGoal','goal_04');
    console.log('04 - заполнить бриф');
  });
  jQuery('.cta .cta__btn').on('click', function() {
  ym(64493158,'reachGoal','goal_05')
    console.log('05 - поделиться идеей');
  });
  jQuery('#modalbtn3').on('click', function() {
    ym(64493158,'reachGoal','goal_06');
    console.log('06 - задать вопрос');
  });
  jQuery('#footer__phone').on('click', function() {
    ym(64493158,'reachGoal','goal_07');
    console.log('07 - телефон в подвале');
  });
  jQuery('#footer__email').on('click', function() {
    ym(64493158,'reachGoal','goal_08');
    console.log('08 - почта в подвале');
  });
  jQuery('#wl_send_calc_btn').on('click', function() {
    ym(64493158,'reachGoal','goal_09');
    console.log('09 - отправить заявку - Калькулятор');
  });
  jQuery('#wl_send_form_btn').on('click', function() {
    ym(64493158,'reachGoal','goal_10');
    console.log('10 - оставить заявку всплывающее окно');
  });
});//ready
</script>
<!-- Конец кода отслеживания целей -->

<?php wp_footer(); ?>
</body>
</html>
