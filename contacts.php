<?php 
$pageTitle = "Contact Us | Netmatters";

// For displaying validation messages for form submission
// session_start();

include('inc/resources/head.php'); 
include('inc/layout/cookies.php');
include('inc/layout/sidebar.php');
?>

<div class="page-container">
    <?php include('inc/layout/header.php');?>
    <!-- Offices -->
    <?php include('inc/layout/contact-offices.php');?>
    
    <!-- Contact Form -->
    <section id="contact" class="contact">
        <div class="inner contact-inner flex">
            <!-- Contact Info -->
            <?php include('inc/layout/contact-info.php');?>
            <!-- Form -->
            <?php include('inc/layout/contact-form.php');?>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include('inc/layout/newsletter.php');?>
    <?php include('inc/layout/footer.php');?>
</div>


<!-- Ending body tag & JS links -->
<?php include('inc/resources/end-body.php');?>