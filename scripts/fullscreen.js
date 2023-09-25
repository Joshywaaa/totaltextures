let fullscreenImage = document.getElementById("fullscreen-image");
let fullscreenContainer = document.getElementById("fullscreen-container");

function openFullscreen(image) {
    fullscreenImage.src = image.src;
    fullscreenContainer.style.display = "block";
}

function closeFullscreen() {
    fullscreenContainer.style.display = "none";
}