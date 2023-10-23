<!DOCTYPE html>
<html lang="en">
 <?php include "includes/head.php" ?>
<body>
    <!-- Navigation bar with Bootstrap styling -->
    <?php include "includes/nav.php"?>
    <main>
        <!-- First section about the business -->
        <div class="article-row">
            <div class="text-content">
                <h2>My Business</h2>
                <p>Total Textures LTD stands as a testament to the expertise and dedication of Dennis, the driving force behind this specialized exterior plastering business. With a keen eye for detail and an unwavering commitment to perfection, Dennis and his team have established themselves as the go-to experts in exterior plastering. They excel in revitalizing the exteriors of various structures, from historic landmarks to contemporary homes, delivering both durability and aesthetic appeal. The business's success lies not only in their exceptional craftsmanship but also in their unwavering commitment to client satisfaction, making Total Textures LTD a trusted name in the industry.</p>
            </div>
            <div class="container">
                <!-- Carousel for showcasing business images -->
                <div id="businessCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#businessCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#businessCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#businessCarousel" data-bs-slide-to="2"></li>
                    </ol>
                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/van.jpg" alt="van" style="width: 100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="images/shed.jpg" alt="shed" style="width: 100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="images/house.jpg" alt="house" style="width: 100%;">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#businessCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#businessCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" ariahidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Second section about the family -->
        <div class="article-row">
            <div class="text-content">
                <h2>My Family</h2>
                <p>Beyond the world of plastering, Dennis's life finds its true richness in his cherished family. Alongside his thriving business, Dennis shares his journey with his loving wife and two children. His wife plays an integral role in managing the business operations, ensuring that everything runs seamlessly. Their two children, inquisitive and full of youthful enthusiasm, often accompany their father to job sites, witnessing firsthand the artistry that defines Total Textures LTD. This family unit doesn't just support the business; they embody its values of unity and dedication. Together, they create a harmonious blend of professional excellence and familial love that underpins every facet of their lives.</p>
            </div>
            <div class="container">
                <!-- Carousel for showcasing family images -->
                <div id="familyCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#familyCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#familyCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#familyCarousel" data-bs-slide-to="2"></li>
                    </ol>
                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/family.jpg" alt="family" style=" width:100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="images/family old.jpg" alt="familyOld" style=" width:100%;">
                        </div>
                        <div class="carousel-item">
                            <img src="images/wife.jpg" alt="wife" style=" width:100%;">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#familyCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#familyCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
