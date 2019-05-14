var svgList = document.getElementsByClassName("logo-svg-element");    

function classToggle() {
    this.classList.toggle('chrested');

    for (i = 0; i < svgList.length; i++) {
        svgList[i].classList.toggle('logo-svg-element-white');
    }
}

document.querySelector('#hamburger').addEventListener('click', classToggle);
