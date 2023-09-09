var navbar = document.getElementById("navbar");
var navbarOffset = navbar.offsetTop;

window.onscroll = function() {
    var scrollPosition = window.pageYOffset;

    if (scrollPosition >= navbarOffset) {
        navbar.style.position = "fixed";
        navbar.style.top = "0";
    } else {
        navbar.style.position = "absolute";
        navbar.style.top = navbarOffset + "px";
    }
};
