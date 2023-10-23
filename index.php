<!DOCTYPE html>
<html>
<?php include "includes/head.php" ?>

<body>
    <!-- Navigation bar with Bootstrap styling -->
    <?php include "includes/nav.php"?>


    <main>
        <div class="container">
            <!-- Bootstrap carousel for displaying images -->
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Remove Indicators (not used) -->
        
                <!-- Carousel slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/oswald.jpg" alt="oswald" style="width: 100%; ">
                    </div>
                    <div class="carousel-item">
                        <img src="images/rollo.jpg" alt="rollo" style="width: 100%; ">
                    </div>

                </div>
        
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </main>

    <!-- Include Bootstrap JavaScript using a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
