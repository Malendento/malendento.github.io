var phoneMask = IMask(
    document.getElementById('recipient-phone'), {
        mask: '+{38}(000)000-00-00'
    });

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 120
    }, 900);
});


$(document).ready(function () {
    $('.sidebar-search__anchors a, .nav__chrested, .header-logo').on('click', function () {
        $('.sidebar__mobile').removeClass('active-sidebar');
    });

    $('.sidebar-search__anchors a, .header-logo').on('click', function () {
        $('.hamburger').removeClass('nav__chrested');
    });

    $('.hamburger').click(function () {
        $('.sidebar__mobile').toggleClass('active-sidebar');
    });

    $('.hamburger').click(function () {
        $(this).toggleClass('nav__chrested');
    });
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