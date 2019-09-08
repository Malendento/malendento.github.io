        window.onload = () => {
            function headerToTop(e) {
                if (window.pageYOffset) {
                    console.log(window.pageYOffset)
                }
                if (window.pageYOffset > 100) {
                    one.style.visibility = 'hidden';
                    one.style.opacity = '0';
                    two.style.marginTop = '-38px';
                    three.style.marginTop = '9px';
                    four.style.marginTop = '0px';
                    five.style.marginTop = '6px';
                    six.style.marginTop = '4px';
                    seven.style.top = '-4px';
                    eight.style.top = '-15px';
                } else {
                    one.style.visibility = 'visible';
                    one.style.opacity = '1';
                    two.style.marginTop = '0px';
                    three.style.marginTop = '22px';
                    four.style.marginTop = '13px';
                    five.style.marginTop = '18px';
                    six.style.marginTop = '20px';
                    seven.style.top = '10px';
                    eight.style.top = '-2px';
                }

            }
            window.onscroll = (e) => {
                headerToTop()
            }
        }


        $(document).ready(function () {
            $('.sidebar-mobile__lang a, .nav__chrested, .sidebar-mobile__items a, .sidebar-mobile__social a, .sidebar-mobile__social_phone a').on('click', function () {
                $('.sidebar__mobile').removeClass('active-sidebar');
            });

            $('#hamburger').on('click', function () {
                $('.sidebar__mobile').addClass('active-sidebar');
            });
        });

        function incrementValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }

        function decrementValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            if (value > 0) {
                document.getElementById('number').value = value;
            }
        }

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var objectSelect = $("#bg-white");
            var objectPosition = objectSelect.offset().top;
            if (scroll > objectPosition) {
                $(".header").addClass("change");
            } else {
                $(".header").removeClass("change");
            }
        });     