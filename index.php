<?php 
$pageTitle = "Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters";

include __DIR__ . './inc/resources/head.php'; 
include __DIR__ . './inc/layout/cookies.php';
include __DIR__ . './inc/layout/sidebar.php';
?>
<!-- Opening Body Tag -->


<div class="page-container">
    <!-- Header -->
    <?php include __DIR__ . './inc/layout/header.php';?>
    <!-- Services -->
    <section id="services" class="services">
        <?php include __DIR__ . './inc/layout/service-banner.php';?>
        <?php include __DIR__ . './inc/layout/service-cards.php';?>
    </section>
    
    <?php include __DIR__ . './inc/layout/about.php';?>
    <?php include __DIR__ . './inc/layout/news.php';?>
    <?php include __DIR__ . './inc/layout/clients.php';?>
    <?php include __DIR__ . './inc/layout/newsletter.php';?>
    <!-- Footer -->
    <?php include __DIR__ . './inc/layout/footer.php';?>
</div>

<!-- Ending body tag & JS links -->
<?php include __DIR__ . './inc/resources/end-body.php';?>