  $(document).ready(function() {
            $('.home-slider-block').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                pauseOnHover: true,
                autoplaySpeed: 3000,
                speed: 1200,
                centerMode: false,
                touchMove: true,
                draggable: true,
                dots: false,
                arrows: true,
                prevArrow: $('.home-slider-left img'),
                nextArrow: $('.home-slider-right img'),
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
            });
        });

document.querySelector('.hamburger').addEventListener('click', () => {
   document.querySelector('.sidebar').classList.toggle('active-sidebar');
    document.querySelector('.hamburger').classList.toggle('hamburger-crossed');
});

const buttonScroll = document.querySelector('.incubator-inhalte button');

buttonScroll.addEventListener('click', () => {
    buttonScroll.scrollIntoView({block: "center", behavior: "smooth"});
    buttonScroll.style.display = 'none';
});