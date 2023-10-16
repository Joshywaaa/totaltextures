// Get a reference to the navbar element
var navbar = document.getElementById("navbar");

// Get the initial offset position of the navbar
var navbarOffset = navbar.offsetTop;

// Add a scroll event listener to the window
window.onscroll = function() {
    // Get the current scroll position
    var scrollPosition = window.pageYOffset;

    // Check if the user has scrolled past the initial position of the navbar
    if (scrollPosition >= navbarOffset) {
        // If scrolled past, make the navbar fixed at the top
        navbar.style.position = "fixed";
        navbar.style.top = "0";
    } else {
        // If not scrolled past, reset the navbar to its original position
        navbar.style.position = "absolute";
        navbar.style.top = navbarOffset + "px";
    }
};
