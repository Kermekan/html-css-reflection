<?php 
$pageTitle = "Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters";

include __DIR__ . './inc/resources/head.php'; 
include __DIR__ . './inc/layout/cookies.php';
include __DIR__ . './inc/layout/sidebar.php';
?>
<!-- Opening Body Tag -->

<!-- Header -->

<div class="page-container">
    <?php include __DIR__ . './inc/layout/header.php';?>
    <!-- Services -->
    <section id="services" class="services">
        <?php include __DIR__ . './inc/layout/service-banner.php';?>
        <?php include __DIR__ . './inc/layout/service-cards.php';?>
    </section>
</div>

<!-- Ending body tag & JS links -->
<?php include __DIR__ . './inc/resources/end-body.php';?>