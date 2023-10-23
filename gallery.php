<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php" ?>

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
