jQuery(function($) {
    'use strict';

    // Header Sticky
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 120) {
            $('.navbar-area').addClass("is-sticky");
        } else {
            $('.navbar-area').removeClass("is-sticky");
        }
    });

    // Mean Menu
    jQuery('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Others Option For Responsive JS
    $(".others-option-for-responsive .dot-menu").on("click", function() {
        $(".others-option-for-responsive .container .container").toggleClass("active");
    });

    // Button Hover JS
    $(function() {
        $('.default-btn')
            .on('mouseenter', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({
                    top: relY,
                    left: relX
                })
            })
            .on('mouseout', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({
                    top: relY,
                    left: relX
                })
            });
    });

    // Home Slider
    $('.home-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        rtl: true,
        mouseDrag: true,
        items: 1,
        autoHeight: true,
        dots: false,
        dotData: true,
        autoplay: false,
        smartSpeed: 500,
        autoplayHoverPause: true,
        navText: [
            "<i class='flaticon-curve-arrow'></i>",
            "<i class='flaticon-curve-arrow-1'></i>",
        ],
    });

    //Slider Text Animation
    $(".home-slider").on("translate.owl.carousel", function() {
        $(".slider-content img, .slider-content span, .slider-content h1, .slider-content .list, .slider-content .typewrite").removeClass("animate__animated animate__fadeInLeft").css("opacity", "0");
        $(".slider-content p").removeClass("animate__animated animate__fadeInLeft").css("opacity", "0");
        $(".slider-content a").removeClass("animate__animated animate__fadeInLeft").css("opacity", "0");
        $(".slider-image, .shape").removeClass("animate__animated animate__slideInUp").css("opacity", "0");
    });

    $(".home-slider").on("translated.owl.carousel", function() {
        $(".slider-content img, .slider-content span, .slider-content h1, .slider-content .list, .slider-content .typewrite").addClass("animate__animated animate__fadeInLeft").css("opacity", "1");
        $(".slider-content p").addClass("animate__animated animate__fadeInLeft").css("opacity", "1");
        $(".slider-content a").addClass("animate__animated animate__fadeInLeft").css("opacity", "1");
        $(".slider-image, .shape").addClass("animate__animated animate__slideInUp").css("opacity", "1");
    });

    // Burger Shop Slider
    $('.shop1-slider').owlCarousel({
        loop: true,
        nav: false,
        rtl: true,
        dots: true,
        smartSpeed: 2000,
        margin: 30,
        autoplayHoverPause: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    // Nice Select JS
    // $('select').niceSelect();

    // Popup Video
    $('.popup-youtube').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    $('.single-gallery').magnificPopup({
        type: 'image',
    });

    $('.gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
         gallery:{
            enabled: true,
            Prev: 'Previous (Left arrow key)',
            tNext: 'Next (Right arrow key)',
            tCounter: '%curr% من %total%'
        }
    });

    // Odometer JS
    $('.odometer').appear(function(e) {
        var odo = $(".odometer");
        odo.each(function() {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });


    // Tabs
    (function($) {
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
        $('.tab ul.tabs li a').on('click', function(g) {
            var tab = $(this).closest('.tab'),
                index = $(this).closest('li').index();
            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');
            tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
            tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
            g.preventDefault();
        });
    })(jQuery);

    // Gallery Slider
    $('.gallery-slider').owlCarousel({
        loop: true,
        nav: false,
        rtl: true,
        dots: true,
        smartSpeed: 2000,
        margin: 30,
        autoplayHoverPause: true,
        autoplay: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    // Testimonial Slider
    $('.testimonial-slider').owlCarousel({
        loop: true,
        margin: 0,
        rtl: true,
        nav: false,
        mouseDrag: true,
        items: 1,
        autoHeight: true,
        dots: true,
        dotData: true,
        autoplay: true,
        smartSpeed: 500,
        autoplayHoverPause: true,
    });

    // Go to Top
    $(function() {
        // Scroll Event
        $(window).on('scroll', function() {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $('.go-top').addClass('active');
            if (scrolled < 600) $('.go-top').removeClass('active');
        });
        // Click Event
        $('.go-top').on('click', function() {
            $("html, body").animate({
                scrollTop: "0"
            }, 500);
        });
    });

    // Feedback Slider
    $('.feedback-slider').owlCarousel({
        loop: true,
        margin: 0,
        rtl: true,
        nav: false,
        mouseDrag: true,
        items: 1,
        autoHeight: true,
        dots: true,
        dotData: true,
        autoplay: true,
        smartSpeed: 500,
        autoplayHoverPause: true,
    });




    // Input Plus & Minus Number JS
    $('.input-counter').each(function() {
        var spinner = jQuery(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.plus-btn'),
            btnDown = spinner.find('.minus-btn'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.on('click', function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
        btnDown.on('click', function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });

    // FAQ Accordion
    $(function() {
        $('.accordion').find('.accordion-title').on('click', function() {
            // Adds Active Class
            $(this).toggleClass('active');
            // Expand or Collapse This Panel
            $(this).next().slideToggle('fast');
            // Hide The Other Panels
            $('.accordion-content').not($(this).next()).slideUp('fast');
            // Removes Active Class From Other Titles
            $('.accordion-title').not($(this)).removeClass('active');
        });
    });

    // WOW JS
    $(window).on('load', function() {
        if ($(".wow").length) {
            var wow = new WOW({
                boxClass: 'wow', // animate__animated animate__element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 20, // distance to the element when triggering the animation (default is 0)
                mobile: true, // trigger animations on mobile devices (default is true)
                live: true, // act on asynchronously loaded content (default is true)
            });
            wow.init();
        }
    });

    // Preloader
    jQuery(window).on('load', function() {
        $('.preloader').fadeOut();
    });

    $('.counter').counterUp();


}(jQuery));


