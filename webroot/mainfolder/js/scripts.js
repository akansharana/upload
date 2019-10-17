

    $(function() {

        "use strict";
    
        var wind = $(window);
    
        // scrollIt
        $.scrollIt({
          upKey: 38,                // key code to navigate to the next section
          downKey: 40,              // key code to navigate to the previous section
          easing: 'swing',          // the easing function for animation
          scrollTime: 600,          // how long (in ms) the animation takes
          activeClass: 'active',    // class given to the active nav element
          onPageChange: null,       // function(pageIndex) that is called when page is changed
          topOffset: -80            // offste (in px) for fixed top navigation
        });
    
    
        // Add Class Reveal for Scroll to Top
        wind.on('scroll', function() {
            if (wind.width() > 600) {
                if (wind.scrollTop() > 600) {
                    $('#back-to-top').addClass('reveal');
                } else {
                    $('#back-to-top').removeClass('reveal');
                }
            }
        });
    
    
        // ScrollUp Active Code
        $('#back-to-top').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    
        
        // wow animation - on scroll
        var wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: false, // default
            live: true // default
        })
        wow.init();
    
        // navbar scrolling background
        wind.on("scroll",function () {
    
            var bodyScroll = wind.scrollTop(),
                navbar = $(".navbar"),
                navbloglogo = $(".blog-nav .logo> img"),
                logo = $(".navbar .logo> img");
    
            if(bodyScroll > 100){
    
                navbar.addClass("nav-scroll");
                logo.attr('src', 'img/sjfxlogo.png');
    
            }else{
    
                navbar.removeClass("nav-scroll");
                logo.attr('src', 'img/sjfxlogo.png');
                navbloglogo.attr('src', 'img/sjfxlogo.png');
            }
        });
        
         var windowsize = wind.width();
            if (windowsize <= 991) {
            $('.navbar-nav .nav-link').on("click", function(){
                $('.navbar-collapse.show').removeClass('show');
            });
          }
       
    
        // progress bar
        wind.on('scroll', function () {
            $(".skills-progress span").each(function () {
                var bottom_of_object = 
                $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = 
                $(window).scrollTop() + $(window).height();
                var myVal = $(this).attr('data-value');
                if(bottom_of_window > bottom_of_object) {
                    $(this).css({
                      width : myVal
                    });
                }
            });
        });
    
    
        // sections background image from data background
        var pageSection = $(".bg-img, section");
        pageSection.each(function(indx){
            
            if ($(this).attr("data-background")){
                $(this).css("background-image", "url(" + $(this).data("background") + ")");
            }
        });
    
    
        // === owl-carousel === //
    
        // Testimonials owlCarousel
        $('.testimonials .owl-carousel').owlCarousel({
            items:1,
            loop:true,
            margin: 15,
            mouseDrag:false,
            autoplay:true,
            smartSpeed:500
        });
    
        // Team owlCarousel
        $('.team .owl-carousel').owlCarousel({
            loop:true,
            margin: 30,
            mouseDrag:false,
            autoplay:true,
            smartSpeed:500,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                700:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        });
    
    
        // magnificPopup
        $('.gallery').magnificPopup({
            delegate: '.popimg',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    
        // ourstoryPopup
        $('.story-video').magnificPopup({
            delegate: '.video',
            type: 'iframe'
        });
     
    
        // countUp
        $('.numbers .count').countUp({
            delay: 10,
            time: 1500
        });
    
    
        // Map Show
        $(".info").on("click", ".icon-toggle", function(){
    
            $(".info").toggleClass("map-show");
            $(".map").toggleClass("overflow-hidden");
    
        });
    
    });
    
    
    // === window When Loading === //
    
    $(window).on("load",function (){
    
        var wind = $(window);
    
        // stellar
        wind.stellar();
    
        // isotope
        $('.gallery').isotope({
          // options
          itemSelector: '.items'
        });
    
        var $gallery = $('.gallery').isotope({
          // options
        });
    
        // filter items on button click
        $('.filtering').on( 'click', 'span', function() {
    
            var filterValue = $(this).attr('data-filter');
    
            $gallery.isotope({ filter: filterValue });
    
        });
    
        $('.filtering').on( 'click', 'span', function() {
    
            $(this).addClass('active').siblings().removeClass('active');
    
        });
    
    });
    
        // FullScreenHeight Resize function
        $(window).resize(function(event) {
            setTimeout(function() {
                SetResizeContent();
            }, 500);
            event.preventDefault();
        });
    
        // FullScreenHeight function
        function fullScreenHeight() {
            var element = $(".full-screen");
            var $minheight = $(window).height();
            element.css('min-height', $minheight);
        }
    
        // FullScreenHeight with resize function
        function SetResizeContent() {
            fullScreenHeight();
        }
    
        SetResizeContent();
    
    // Slider 
    $(document).ready(function() {
    
        var owl = $('.header .owl-carousel');
    
        // Slider owlCarousel
        $('.slider .owl-carousel').owlCarousel({
            items: 1,
            loop:true,
            margin: 0,
            mouseDrag:false,
            autoplay:true,
            smartSpeed:500
        });
    
        // Slider owlCarousel
        $('.slider-fade .owl-carousel').owlCarousel({
            items: 1,
            loop:true,
            margin: 0,
            mouseDrag:false,
            autoplay:true,
            smartSpeed:200,
            animateOut: 'fadeOut'
        });
    
        // Slider text animation
        owl.on('changed.owl.carousel', function(event) {
            var item = event.item.index - 2;     // Position of the current item
            $('h3').removeClass('animated fadeInLeft');
            $('h1').removeClass('animated fadeInRight');
            $('p').removeClass('animated fadeInUp');
            $('.btn').removeClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated fadeInLeft');
            $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInRight');
            $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('.btn').addClass('animated fadeInUp');
        });
    
        // Contact form 
        var form = $('.contact-form');
            form.submit(function() {
                $this = $(this);
                $.post($(this).attr('action'), $('.contact-form').serialize(), function(data) {
                    $this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
            }, 'json');
                    return false;
        });
    
        // CountDown for coming soon page
            $(".countdown").countdown({
                date: "01 Jan 2021 00:01:00", //set your date and time. EX: 15 May 2014 12:00:00
                format: "on"
            });
    
    });