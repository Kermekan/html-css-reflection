<?php 
$pageTitle = "Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters";

include __DIR__ . './inc/resources/head.php'; 
include __DIR__ . './inc/layout/cookies.php';
include __DIR__ . './inc/layout/sidebar.php';
?>

<!-- Opening Body Tag -->
<?php include __DIR__ . './inc/layout/header.php';?>
<section id="services" class="services">
    <?php include __DIR__ . './inc/layout/service-banner.php';?>
    <?php include __DIR__ . './inc/layout/service-cards.php';?>
</section>

<?php
// Ending body tag & JS links
include __DIR__ . './inc/resources/end-body.php';

?>