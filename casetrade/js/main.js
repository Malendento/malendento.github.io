        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 120
            }, 900);
        });

        $(document).ready(function () {
            $('.sidebar-search__anchors a, .nav__chrested, .mobile-sidebar__logo, .sidebar-search__language a').on('click', function () {
                $('.sidebar__mobile').removeClass('active-sidebar');
            });

            $('.sidebar-search__anchors a, .mobile-sidebar__logo, .sidebar-search__language a').on('click', function () {
                $('.hamburger').removeClass('nav__chrested');
            });

            $('.hamburger').click(function () {
                $('.sidebar__mobile').toggleClass('active-sidebar');
            });

            $('.hamburger').click(function () {
                $(this).toggleClass('nav__chrested');
            });
        });


        var phoneMask = IMask(
            document.getElementById('recipient-phone'), {
                mask: '+{38}(000)000-00-00'
            });

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            infinite: false,
            fade: true,
            draggable: true,
            asNavFor: '.slider-nav',
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            draggable: true,
            arrows: true,
            infinite: false,
            asNavFor: '.slider-for',
            focusOnSelect: true,
            appendArrows: ('.arrows'),
            prevArrow: ('.arrow-left'),
            nextArrow: ('.arrow-right')
        });

        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            pauseOnHover: false,
            autoplaySpeed: 3000,
            speed: 1200,
            touchMove: true,
            swipeToSlide: true,
            draggable: true,
            arrows: true,
            prevArrow: $('.left-arrow'),
            nextArrow: $('.right-arrow'),
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });

        $(document).ready(function () {
            $('.sidebar-mobile__lang a, .nav__chrested, .sidebar-mobile__items a, .sidebar-mobile__social a, .sidebar-mobile__social_phone a').on('click', function () {
                $('.sidebar__mobile').removeClass('active-sidebar');
            });

            $('#hamburger').on('click', function () {
                $('.sidebar__mobile').addClass('active-sidebar');
            });

            $(document).ready(function () {
                $('.label').click(function () {
                    var text_for_p = "";

                    if ($(this).find('input').prop("checked") == true) {
                        $(this).find('input').prop("checked", false);
                    } else {
                        $(this).find('input').prop("checked", true);
                    }

                    var n = 0;

                    $(this).parent().find('.label-2').each(function () {
                        if ($(this).find('input').prop("checked") == true) {
                            if (n == 0) {
                                text_for_p += ": ";
                                n = 1;
                            } else {
                                text_for_p += ", ";
                            }
                            text_for_p += $(this).find('span').eq(1).text();
                        }
                    });

                    if (n == 1) {
                        $(this).parent().parent().find('.input-popup').addClass('input-popup-active');
                    } else {
                        $(this).parent().parent().find('.input-popup').removeClass('input-popup-active');
                    }

                    $(this).parent().parent().find('.input-popup').find('p').find('span').text(text_for_p);
                });


                $('.input-popup').click(function (event) {
                    if (event.target.className == "input-popup-arrow") {
                        if ($(this).hasClass('input-popup-active')) {
                            $(this).removeClass('input-popup-active');

                            $(this).parent().find('.input-popup-content').find('.label-2').each(function () {
                                if ($(this).find('input').prop("checked") == true) {
                                    $(this).find('input').prop("checked", false);
                                }
                            });

                            $(this).find('span').text("");

                            $(this).parent().find("#number_btn").removeClass("button-active");
                            $(this).parent().find("#min-range-number").prop("disabled", true);
                            $(this).parent().find("#max-range-number").prop("disabled", true);

                        } else {
                            $('.input-popup').not($(this)).each(function () {
                                if ($(this).hasClass('input-popup-open')) {
                                    $(this).removeClass('input-popup-open');
                                    $(this).parent().find('.input-popup-content').fadeToggle(300);
                                }
                            });

                            if ($(this).hasClass('input-popup-open')) {
                                $(this).removeClass('input-popup-open');
                            } else {
                                $(this).addClass('input-popup-open');
                            }

                            $(this).parent().find('.input-popup-content').fadeToggle(300);
                        }

                    } else {
                        $('.input-popup').not($(this)).each(function () {
                            if ($(this).hasClass('input-popup-open')) {
                                $(this).removeClass('input-popup-open');
                                $(this).parent().find('.input-popup-content').fadeToggle(300);
                            }
                        });

                        if ($(this).hasClass('input-popup-open')) {
                            $(this).removeClass('input-popup-open');
                        } else {
                            $(this).addClass('input-popup-open');
                        }

                        $(this).parent().find('.input-popup-content').fadeToggle(300);
                    }
                });


                $('.input-popup-content').find('p').click(function () {
                    var radio = "";
                    $('.input-popup-radio').find('p').text($(this).text());

                    radio += $(this).attr("to");
                    $(radio).prop('checked', true);
                });
                $('.radio-popup').click(function () {
                    $(this).fadeToggle(300);
                    $(this).parent().find('.input-popup').removeClass('input-popup-open');
                });
            });

        });