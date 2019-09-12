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

            $(document).ready(function () {

                $('.block').find('h3').click(function () {
                    $(this).parent().find('.info').slideToggle(500);

                    if ($(this).parent().find('.plus').hasClass('active-plus')) {
                        $(this).parent().find('.plus').removeClass('active-plus');
                    } else {
                        $(this).parent().find('.plus').addClass('active-plus');
                    }
                });
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

                $('.checkmark').click(function () {
                    $(this).parent().find('input').prop("checked", true);
                });

                $('.radio-popup').click(function () {
                    $(this).fadeToggle(300);
                    $(this).parent().find('.input-popup').removeClass('input-popup-open');
                });
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