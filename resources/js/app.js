require('./bootstrap');


window.onscroll = function () {
    const navbar = document.getElementById("navbar");
    const heroText = document.getElementById("hero-text");
    if (window.pageYOffset >= heroText.offsetTop) {
        navbar.classList.add("navbar-dark")
    } else {
        navbar.classList.remove("navbar-dark");
    }
};
