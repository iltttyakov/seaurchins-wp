$( document ).ready(function () {
    if ($('.team__slider').length) {
        $('.team__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 763,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    }

    if ($('.rooms__slider').length) {
        $('#rooms__slider--' + $("input[name=room]:checked").val()).slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 763,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    }

    if ($('#rooms__slider').length) {
        $('#rooms__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 763,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    }

    if ($('.rooms__checkbox').length) {
        $('.rooms__switch').on('change', function () {
            let sliderName = $("input[name=room]:checked").val();

            $('.rooms__slider').addClass('visually-hidden');
            $('#rooms__slider--' + sliderName).removeClass('visually-hidden');

            $('#rooms__slider--' + $("input[name=room]:checked").val()).slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 763,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    }

    if ($('#about__urchin').length) {
        $(window).on('scroll', function () {
            var s = window.pageYOffset; // current scrollTop
            if ((s / 1300) <= 1.6) {
                $('#about__urchin').css('transform', 'scale(' + (s / 1300)  + ')');
            }
        });
    }

    if ($('#usp__right').length) {
        let usp_clouds = document.getElementById('usp__right');

        $(window).on('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;

            usp_clouds.style.transform = 'translate(-' + x * 20 + 'px, -' + y * 15 + 'px)';
        });
    }

    if ($('.contribution__slide-control--prev').length) {
        $('.contribution__slide-control--prev').on('click', function () {
            var active = $('.contribution__slider-pic--active');
            if ($(active).prev(".contribution__slider-pic").length) {
                $(active).removeClass('contribution__slider-pic--active');
                $(active).prev(".contribution__slider-pic").addClass('contribution__slider-pic--active');
            } else {
                $(active).removeClass('contribution__slider-pic--active');
                $('.contribution__slider-pic').last().addClass('contribution__slider-pic--active');
            }
        });
    }

    if ($('.contribution__slide-control--next').length) {
        $('.contribution__slide-control--next').on('click', function () {
            var active = $('.contribution__slider-pic--active');
            if ($(active).next(".contribution__slider-pic").length) {
                $(active).removeClass('contribution__slider-pic--active');
                $(active).next(".contribution__slider-pic").addClass('contribution__slider-pic--active');
            } else {
                $(active).removeClass('contribution__slider-pic--active');
                $('.contribution__slider-pic').first().addClass('contribution__slider-pic--active');
            }
        });
    }

    $(".team__scroll-block").niceScroll({
        cursorwidth: 5,
        cursoropacitymin: 0.4,
        cursorcolor: '#ffffff',
        cursorborder: 'none',
        cursorborderradius: 4,
        autohidemode: 'leave'
    });

    $('.burger').on('click', function () {
        $(this).toggleClass('burger--open');
        $('.header__menu').slideToggle();
        $('.first').toggleClass('first--visible');
        $('.usp').toggleClass('usp--hidden');
    });

    if ($('.request__input').length) {
        $('.request__input').each( function(index, element) {
            if ($(element).width() < 500) {
                $(element).parent().addClass('request__text-block--column');
            }
        });
    }

});

