<?php include ('inc/resources/connection.php');?>
<section id="news" class="news">
    <!-- News Bar -->
    <div class="news-bar">
        <div class="inner bar-inner">
            <span class="text-uppercase">Latest</span>
        </div>
    </div>
    <!-- Cards -->
    <div class="news-articles">
        <div class="inner news-inner">
            <div class="articles-list flex">
                <?php include ('inc/resources/news-cards.php');?>
            </div><!-- .articles-list -->
        </div>
    </div><!-- .news-articles -->
</section>