$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 5
    }, 900);
});

$(document).ready(function () {
    //    $('.sidebar-links a, .sidebar-social__links a, .mobile-logo').on('click', function () {
    //        $('.sidebar').removeClass('active-sidebar');
    //    });

    $('.hamburger').click(function () {
        $('.sidebar').toggleClass('active-sidebar');
    });
});

$(document).ready(function () {
        let slider = $('.photos-slider');


    $('.close-button-slider').on('click', function () {
        $('.custom-modal').toggleClass('custom-modal-active');
        $('.body').removeClass('body-overflow');
        location.reload();
    });

    $('.container-item').click(function () {
        $('.custom-modal').toggleClass('custom-modal-active');
        $('.body').toggleClass('body-overflow');
        let clickedNumber = ($(this).index());
        slider.slick({
            initialSlide: clickedNumber,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            pauseOnHover: true,
            autoplaySpeed: 3000,
            speed: 1200,
            centerMode: false,
            touchMove: true,
            fade: true,
            draggable: true,
            arrows: true,
            dots: false,
            prevArrow: $('.arrow-slider-left'),
            nextArrow: $('.arrow-slider-right')
        });
    });
});