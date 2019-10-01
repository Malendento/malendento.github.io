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

        var phoneMask = IMask(
            document.getElementById('recipient-phone-modal'), {
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