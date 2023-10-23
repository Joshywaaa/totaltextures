<!DOCTYPE html>
<html>

<head>
    <!-- Set character encoding and viewport for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to the external CSS stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Include Bootstrap CSS using a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Include Bootstrap JavaScript and Popper.js using CDNs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!-- Set the title of the webpage -->
    <title>Total Textures</title>
</head>

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
