        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 5
            }, 900);
        });

        $(document).ready(function () {
            $('.sidebar-links a, .sidebar-social__links a, .mobile-logo').on('click', function () {
                $('.sidebar__mobile').removeClass('active-sidebar');
            });

            $('.sidebar-links a, .sidebar-social__links a, .mobile-logo').on('click', function () {
                $('.hamburger').removeClass('nav__chrested');
            });

            $('.hamburger').click(function () {
                $('.sidebar__mobile').toggleClass('active-sidebar');
            });

            $('.hamburger').click(function () {
                $(this).toggleClass('nav__chrested');
            });
        });