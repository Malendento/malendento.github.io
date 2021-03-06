let flatSlider = $('.flat-slider');

$(document).ready(function () {
    flatSlider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        fade: true,
        pauseOnHover: true,
        autoplaySpeed: 3000,
        speed: 10,
        centerMode: false,
        touchMove: false,
        draggable: false,
        arrows: true,
        dots: false,
        prevArrow: $('.arrow-left'),
        nextArrow: $('.arrow-right')
    });

});


function rangeSlider(id, onDrag) {

    var range = document.getElementById(id),
        dragger = range.children[0],
        draggerWidth = 10, // width of your dragger
        down = false,
        rangeWidth, rangeLeft;

    dragger.style.width = draggerWidth + 'px';
    dragger.style.left = -draggerWidth + 'px';
    dragger.style.marginLeft = (draggerWidth / 2) + 'px';

    range.addEventListener("mousedown", function (e) {
        rangeWidth = this.offsetWidth;
        rangeLeft = this.offsetLeft;
        down = true;
        updateDragger(e);
        return false;
    });

    document.addEventListener("mousemove", function (e) {
        updateDragger(e);
    });

    document.addEventListener("mouseup", function () {
        down = false;
    });

    function updateDragger(e) {
        if (down && e.pageX >= rangeLeft && e.pageX <= (rangeLeft + rangeWidth)) {
            dragger.style.left = e.pageX - rangeLeft - draggerWidth + 'px';
            if (typeof onDrag == "function") onDrag(Math.round(((e.pageX - rangeLeft) / rangeWidth) * 100));
        }
    }

}

var lastPercent = 0;

var shouldUpdateLp = true;

// Run!

rangeSlider('movingPart0', function (value) {
    var nextPh;
    nextPh = value > lastPercent;
    if (shouldUpdateLp && (value / lastPercent > 1.05 || lastPercent / value > 1.05)) {
        if (nextPh) {
            flatSlider.slick("slickNext");
            document.getElementById('test-result').style.color = "green"
        } else {
            flatSlider.slick("slickPrev");
            document.getElementById('test-result').style.color = "red"
        }
        lastPercent = value;
        shouldUpdateLp = false;
        setTimeout(() => {
            shouldUpdateLp = true
        }, 300)
    }
    document.getElementById('test-result').innerHTML = value + '%';
});




//// new function

$(document).ready(function () {
    $('.zoom-button').click(function () {
        $('.slider-normal').toggleClass('slider-position-zoom');
    });
});


