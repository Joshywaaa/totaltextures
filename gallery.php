<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding and viewport for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link to the external CSS stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Include Bootstrap CSS and JavaScript using CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Title of the webpage -->
    <title>Total Textures</title>
</head>
<body>
    <!-- Navigation bar with Bootstrap styling -->
    <?php include "includes/nav.php"?>

    <main>
        <!-- Container for the image grid -->
        <div class="image-grid">
            <!-- Individual image containers with click and hover events -->
            <div class="image-container">
                <img src="images/rollo.jpg" alt="houseDrive" onclick="openFullscreen(this)" onmouseover="zoomImage(this)" onmouseout="unzoomImage(this)">
            </div>
            <div class="image-container">
                <img src="images/oswald.jpg" alt="insideChair" onclick="openFullscreen(this)" onmouseover="zoomImage(this)" onmouseout="unzoomImage(this)">
            </div>
       
        </div>
    
        <!-- Fullscreen image container -->
        <div id="fullscreen-container">
            <img id="fullscreen-image" class="fullscreen-img" onclick="closeFullscreen()" alt="Fullscreen Image">
            </div>
        </div>
    </main>
    
    <!-- JavaScript functions for image interaction -->
    <script>
        function openFullscreen(img) {
            document.getElementById("fullscreen-image").src = img.src;
            document.getElementById("fullscreen-container").style.display = "block";
        }

        function closeFullscreen() {
            document.getElementById("fullscreen-container").style.display = "none";
        }

        function zoomImage(img) {
            img.style.transform = "scale(1.1)";
        }

        function unzoomImage(img) {
            img.style.transform = "scale(1)";
        }
    </script>
</body>
</html>
