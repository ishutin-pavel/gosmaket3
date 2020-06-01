$(document).ready(function(){
    $(window).scroll(function(){
        $('.page__row--nav').toggleClass('page__row--nav-fixed', $(this).scrollTop() > 0);
    });
    
    $(".nav__button, .nav__bg").on("click", function(){
        var target = $(this).data("target");
        $(".nav__bg").toggleClass("nav__bg--active");
        $(target).toggleClass("nav__menu--active");
    });
    
    $(".nav__level").on("click", function(){
        $(this).toggleClass("nav__level--active");
        $(this).siblings(".nav__dropdown").slideToggle();
    });
    
    $(".view").on("click", function(){
        $(this).toggleClass("view--active");
        var target = $(this).data("target");
        $(target).addClass("visible");
    });
    
    // Carousel
    
    $(".slider").owlCarousel({
		items: 1,
		loop: true,
        margin: 0,
        nav: true,
        dots: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        mouseDrag: false,
		autoplay: true,
		autoplayTimeout: 7200,
        autoplayHoverPause: true,
        
	});
    jQuery(".slider__item").mouseenter(function() {
        jQuery(this).trigger('stop.owl.autoplay');
    });
    jQuery(".slider__item").mouseleave(function() {
        jQuery(this).trigger('play.owl.autoplay');
    });
    
    $(".carousel").owlCarousel({
		items: 1,
		loop: true,
        margin: 0,
        nav: true,
        dots: true,
        animateOut: 'fadeOut',
        mouseDrag: false,
		autoplay: false,
		autoplayTimeout: 5000,
	});
    
    $(".portfolio").owlCarousel({
		loop: true,
        margin: 0,
        nav: true,
        dots: true,
        animateOut: 'fadeOut',
        mouseDrag: false,
		autoplay: false,
		autoplayTimeout: 5000,
        responsive : {
            0 : {
                items: 1,
            },
            575 : {
                items: 2,
            },
        }
	});
    
    $(".work__carousel").owlCarousel({
		loop: true,
        margin: 0,
        items: 1,
        nav: true,
        dots: true,
        dotsData: true
	});
   
    
    var windowWidth = $(window).width();
    var width = $('.customers__list').width();
    $('.customers__list').css('min-width', width * 2);

    $('.customers').mousemove(function(event){
        var moveX = (($(window).width() / 2) - event.pageX) * 0.2;
        $('.customers__row--primary').css('margin-left', moveX + 'px');
        $('.customers__row--secondary').css('margin-left', -moveX + 'px');
    });
    
    // Tabs
    (function($){				
	jQuery.fn.lightTabs = function(options){

		var createTabs = function(){
			tabs = this;
			i = 0;
			
			showPage = function(i){
				$(tabs).children("div").children("div").removeClass("show");
				$(tabs).children("div").children("div").eq(i).addClass("show");
				$(tabs).children("ul").children("li").removeClass("active");
				$(tabs).children("ul").children("li").eq(i).addClass("active");
			}
								
			showPage(0);				
			
			$(tabs).children("ul").children("li").each(function(index, element){
				$(element).attr("data-page", i);
				i++;                        
			});
			
			$(tabs).children("ul").children("li").click(function(){
				showPage(parseInt($(this).attr("data-page")));
			});				
		};		
		return this.each(createTabs);
	};
    })(jQuery);
    $(".tabs").lightTabs();
    
    $('.jobs__header').click(function () {
        $(this).toggleClass('jobs__header--active').next().slideToggle();
        $('.jobs__header').not(this).removeClass('jobs__header--active').next().slideUp();
    });
    
});