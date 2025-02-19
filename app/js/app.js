(function($) {
    $(document).ready(function() {

        // smooth scrolling
        function smoothScroll(width) {
            if (width <= 1300) {
                $('a[href^="#"]').on('click', function(e) {
                    e.preventDefault();
        
                    var target = this.hash;
                    var $target = $(target);
        
                    $('html, body').stop().animate({
                        'scrollTop': 0 + $target.offset().top - 100
                    }, 900, 'swing', function() {});
                });
            } else {
                $('a[href^="#"]').on('click', function(e) {
                    e.preventDefault();
        
                    var target = this.hash;
                    var $target = $(target);
        
                    $('html, body').stop().animate({
                        'scrollTop': 0 + $target.offset().top - 143
                    }, 900, 'swing', function() {});
                });
            }
        }
        smoothScroll( $(window).width() );
        $(window).on('resize', function() {
            smoothScroll( $(this).width() );
        });

        function smoothScrollMenu(width) {
            if (width <= 1300) {
                $('.menu a[href^="#"]').on('click', function(e) {
                    e.preventDefault();
        
                    var target = this.hash;
                    var $target = $(target);
        
                    $('html, body').stop().animate({
                        'scrollTop': 0 + $target.offset().top - 190
                    }, 900, 'swing', function() {});
                });
            } else {
                $('.menu a[href^="#"]').on('click', function(e) {
                    e.preventDefault();
        
                    var target = this.hash;
                    var $target = $(target);
        
                    $('html, body').stop().animate({
                        'scrollTop': 0 + $target.offset().top - 258
                    }, 900, 'swing', function() {});
                });
            }
        }
        smoothScrollMenu( $(window).width() );
        $(window).on('resize', function() {
            smoothScrollMenu( $(this).width() );
        });

        // add class to body when nav item is hovered over
        $('header .primary-header .navigation nav ul li.parent a').hover(function () {
            $('body').addClass('nav-hover');
        }, 
        function () {
            $('body').removeClass('nav-hover');
        });

        $('header .primary-header .navigation nav ul li.parent ul').hover(function () {
            $('body').addClass('nav-hover');
        }, 
        function () {
            $('body').removeClass('nav-hover');
        });

        // add a button to the mobile nav for subpages dropdown
        $('<button class="mobile-dropdown"></button>').insertAfter('header .primary-header .navigation nav ul li.parent a');
        $('.mobile-dropdown').on('click', function() {
            $(this).toggleClass('open');
        });

        // open and close the mobile nav
        $('.mobile-nav-toggle').on('click', function() {
            $(this).toggleClass('open');
            $('body').toggleClass('nav-open');
        });

        // resize function
        /*function resizeFunction(width) {
            if (width <= 1300) {
                
            } else {
                
            }
        }
        resizeFunction( $(window).width() );
        $(window).on('resize', function() {
            resizeFunction( $(this).width() );
        });*/


        // remove nav class when scrolled to the top of the screen
        var top_offset = $(window).scrollTop();
        if (top_offset == 0) {
            $('body').removeClass('small-nav');
        } else {
            $('body').addClass('small-nav');
        }

        $(function () {
            $(window).scroll(function () {
                var top_offset = $(window).scrollTop();
                if (top_offset == 0) {
                    $('body').removeClass('small-nav');
                } else {
                    $('body').addClass('small-nav');
                }
            })
        });

        // stripe slider
        $('.default-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 7000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        $('.gift-cards .stripe-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 4000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        $('.text-program .stripe-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 5000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        $('.catering .stripe-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 4000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        $('.news .stripe-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 4000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        $('.kids .stripe-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 4000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        $('.giving .stripe-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 5000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false
        });

        // share photos slider
        $('.share-photos-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 5000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        variableWidth: false,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        variableWidth: false,
                        slidesToShow: 1
                    }
                }
            ]
        });

        // share text slider
        $('.share-text-slider').slick({
            infinite: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            speed: 15000,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 0,
            swipe: false,
            touchMove: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        speed: 10000
                    }
                }
            ]
        });
        
        // our story slider
        $('.our-story-slider').slick({
            infinite: true,
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            slidesToShow: 3,
            touchThreshold: 100,
            initialSlide: 0,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        arrows: true,
                        initialSlide: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        arrows: true,
                        initialSlide: 2
                    }
                }
            ]
        });

        // featured offers slider
        $('.offers-slider').slick({
            infinite: true,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 3,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // add class to menu categories bar when it's sticking
        if ($('.menu').length) {
            const el = document.querySelector('.menu-categories')
            const observer = new IntersectionObserver( 
                ([e]) => e.target.classList.toggle('is-pinned', e.intersectionRatio < 1),
                { threshold: [1] }
            );
            observer.observe(el);
        }

        // menu categories slider
        $('.menu-categories-slider').slick({
            infinite: true,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            variableWidth: true,
            touchThreshold: 100,
            swipe: false,
            draggable: false,
            responsive: [
                {
                    breakpoint: 1490,
                    settings: {
                        swipe: true,
                        draggable: true,
                    }
                }
            ]
        });

        // reset position of buttons when menu categories gets smaller
        $(window).scroll(function () {
            $('.menu-categories-slider').slick('setPosition');
        })

        // custom file upload button
        $('<span class="filename">Choose a file</span><label for="input_1_19" class="btn --white-bg choose-file">Browse</label>').appendTo('.ginput_container_fileupload');

        $('input[type="file"]').on('change', function(e) {
            var fileName = e.target.files[0].name;
            $('.filename').text(fileName);
        });
    
        $(document).on('gform_post_render', function() {
            $('<span class="filename">Choose a file</span><label for="input_1_19" class="btn --white-bg choose-file">Browse</label>').appendTo('.ginput_container_fileupload');

            $('.choose-file').on('click', function() {
                $('#input_1_19').trigger('click');
            });
            $('input[type="file"]').on('change', function(e) {
                var fileName = e.target.files[0].name;
                $('.filename').text(fileName);
                //$('#input_2_2').val(fileName);
            });
        });

        $('form').submit(function() {
            $('.filename').hide();
        });

        /*$('.choose-file').on('click', function() {
            $('#input_2_1').trigger('click');
        });*/

        // show more news articles
        $('.news-posts__show-more .btn').on('click', function() {
            $('.news-posts__post:hidden').slice(0, 6).fadeIn();
            if ($('.news-posts__post').length == $('.news-posts__post:visible').length) {
                $('.news-posts__show-more').fadeOut();
            }
        });

        // show more accordion items
        $('.membership-info__button .btn').on('click', function() {
            $('#membership-info .accordion-item:hidden').slice(0, 10).fadeIn();
            if ($('#membership-info .accordion-item').length == $('#membership-info .accordion-item:visible').length) {
                $('.membership-info__button').fadeOut();
            }
        });

    });
})(jQuery);