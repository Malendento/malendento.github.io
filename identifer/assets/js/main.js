const firstTab = document.querySelector('.our-solutions_tab-developer')
const secondTab = document.querySelector('.our-solutions_tab-owners')
const imageTab = document.getElementById('image-tab')
const burger = document.querySelectorAll('.hamburger')
const sidebar = document.querySelector('.sidebar')
const bodyOverflow = document.getElementsByTagName('body')[0]

firstTab.addEventListener('click', () => {
    if (secondTab.classList.contains('our-solutions_tab-active')) {
        secondTab.classList.remove('our-solutions_tab-active')
    }
    firstTab.classList.add('our-solutions_tab-active')
    imageTab.src = './assets/img/developers-solution.svg'
})

secondTab.addEventListener('click', () => {
    if (firstTab.classList.contains('our-solutions_tab-active')) {
        firstTab.classList.remove('our-solutions_tab-active')
    }
    secondTab.classList.add('our-solutions_tab-active')
    imageTab.src = './assets/img/owners-solution.svg'
})

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top + -80
    }, 1000);
});

$(window).scroll(function () {
    const scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $(".header-mobile").addClass("header-mobile_active");
    } else {
        $(".header-mobile").removeClass("header-mobile_active");
    }
});

burger.forEach(item => {
    item.addEventListener('click', () => {
        sidebar.classList.toggle('active-sidebar')
        bodyOverflow.classList.toggle('body-overflow')
    })
})

document.querySelectorAll('.sidebar-body a').forEach(item => {
    item.addEventListener('click', () => {
        sidebar.classList.remove('active-sidebar')
        bodyOverflow.classList.remove('body-overflow')
    })
})