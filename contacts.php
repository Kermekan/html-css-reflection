<?php 
$pageTitle = "Contact Us | Netmatters";

include __DIR__ . './inc/resources/head.php'; 
include __DIR__ . './inc/layout/cookies.php';
include __DIR__ . './inc/layout/sidebar.php';
?>

<div class="page-container">
    <?php include __DIR__ . './inc/layout/header.php';?>
    
    <section id="offices" class="offices">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs hidden-sm hidden-xs">
            <div class="breadcrumbs-inner inner">
                <ul class="breadcrumb">
                    <li>
                        <a class="fw-bold home-link" href="index.html">Home</a>
                    </li>
                    <li>
                        Our Offices
                    </li>
                </ul>
            </div>
        </div>
        <!-- Title -->
        <div class="top">
            <div class="title-container">
                <div class="title inner">
                    <h1>Our Offices</h1>
                </div>
            </div>
        </div><!-- .top -->
        <!-- Offices Cards -->
        <div class="offices-cards-list inner flex">
            <!-- Individual Cards -->
            <div class="offices-cards">
                <!-- Image -->
                <div class="img-container">
                    <a href="#" class="image-inner">
                        <img src="assets/images/offices/cambridge.jpg" alt="">
                    </a>
                </div>
                <!-- Card info -->
                <div class="card-content card flex">
                    <p class="h2">
                        <a class="text-capitalize" href="">Cambridge Office</a>
                    </p>
                    <p class="p text-capitalize">
                    Unit 1.28,
                    <br>
                    St John's Innovation Centre,
                    <br>
                    Cowley Road, Milton,
                    <br>
                    Cambridge,
                    <br>
                    <span class="text-uppercase">cb4 0ws</span>
                    </p>
                    <!-- phone -->
                    <div class="tel">
                        <a class="h3" href="">01223 37 57 72</a>
                    </div>
                    <!-- Button -->
                    <div class="btn web-btn">
                        <a href="#" class="text-center flex text-uppercase">
                            View More
                        </a>
                    </div>
                </div>
                <!-- Map -->
                <div id="map1" class="map"></div>
            </div><!-- .offices-cards -->
            <div class="offices-cards">
                <!-- Image -->
                <div class="img-container">
                    <a href="#" class="image-inner">
                        <img src="assets/images/offices/wymondham.jpg" alt="">
                    </a>
                </div>
                <!-- Card info -->
                <div class="card-content card flex">
                    <p class="h2">
                        <a class="text-capitalize" href="">wymondham office</a>
                    </p>
                    <p class="p text-capitalize">
                    Unit 15,
                    <br>
                    Penfold Drive,
                    <br>
                    Gateway 11 Business Center,
                    <br>
                    wymondham, norfolk
                    <br>
                    <span class="text-uppercase">nr18 0wz </span>
                    </p>
                    <!-- phone -->
                    <div class="tel">
                        <a class="h3" href="">01603 70 40 20</a>
                    </div>
                    <!-- Button -->
                    <div class="btn web-btn">
                        <a href="#" class="text-center flex text-uppercase">
                            View More
                        </a>
                    </div>
                </div>
                <!-- Map -->
                <div id="map2" class="map"></div>
            </div><!-- .offices-cards -->
            <div class="offices-cards">
                <!-- Image -->
                <div class="img-container">
                    <a href="#" class="image-inner">
                        <img src="assets/images/offices/yarmouth-2.jpg" alt="">
                    </a>
                </div>
                <!-- Card info -->
                <div class="card-content card flex">
                    <p class="h2">
                        <a class="text-capitalize" href="">great yarmouth Office</a>
                    </p>
                    <p class="p text-capitalize">
                    suite f23,
                    <br>
                    Beacon Innovation Centre,
                    <br>
                    Beacon Park, Gorleston,
                    <br>
                    Great Yarmouth, norfolk
                    <br>
                    <span class="text-uppercase">nr31 7ra</span>
                    </p>
                    <!-- phone -->
                    <div class="tel">
                        <a class="h3" href="01223375772">01493 60 32 04</a>
                    </div>
                    <!-- Button -->
                    <div class="btn web-btn">
                        <a href="#" class="text-center flex text-uppercase">
                            View More
                        </a>
                    </div>
                </div>
                <!-- Map -->
                <div id="map3" class="map"></div>
            </div><!-- .offices-cards -->
        </div><!-- .offices-cards-list -->
    </section>
    
    <!-- Footer -->
    <?php include __DIR__ . './inc/layout/newsletter.php';?>
    <?php include __DIR__ . './inc/layout/footer.php';?>
</div>


<!-- Ending body tag & JS links -->
<?php include __DIR__ . './inc/resources/end-body.php';?>