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