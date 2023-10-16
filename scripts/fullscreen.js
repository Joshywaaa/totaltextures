// Get references to the fullscreen image and its container
let fullscreenImage = document.getElementById("fullscreen-image");
let fullscreenContainer = document.getElementById("fullscreen-container");

// Function to open the fullscreen image
function openFullscreen(image) {
    // Set the source of the fullscreen image to the clicked image's source
    fullscreenImage.src = image.src;
    
    // Display the fullscreen container to show the image
    fullscreenContainer.style.display = "block";
}

// Function to close the fullscreen image
function closeFullscreen() {
    // Hide the fullscreen container to close the image
    fullscreenContainer.style.display = "none";
}
