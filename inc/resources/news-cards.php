<?php 

$newsQuery = "SELECT * FROM news_entries ORDER BY date_published DESC LIMIT 3;";
$newsResult = mysqli_query($conn, $newsQuery);

try {
    while($news = mysqli_fetch_assoc($newsResult)) {
        
        $date = date_format(date_create(htmlspecialchars($news['date_published'])),"jS F Y");
        $title = htmlspecialchars($news["title"]);
        $category = htmlspecialchars($news["category"]);
        $paragraph = htmlspecialchars($news["paragraph"]);
        $image = htmlspecialchars($news["image_src"]);
        $author = htmlspecialchars($news["author"]);
        $author_img= htmlspecialchars($news["author_image"]);
        
        echo ("
        <div class='article-container article-lg article-sm $category-article'>
            <!-- Image -->
            <div class='img-container'>
                <!-- Image -->
                <a href='#' class='category text-uppercase'></a>
                <a href='#' class='image-inner'>
                    <img src='$image' alt='$title'>
                </a>
            </div>
            <div class='article-content card flex'>
                <h3 class='article-content--title'>
                    <a href='#'>$title</a>
                </h3>
                <p class='article-content--text'>
                    $paragraph
                </p>
                <div class='btn article-btn'>
                    <a href='#' class='text-center text-uppercase flex'>Read More</a>
                </div>
                <div class='article-content--details flex'>
                    <div class='author-img'>
                        <img src='$author_img' alt='$author' class='img-fluid'>
                    </div>
                    <p class='text'>
                        <strong>Posted by 
                            <br>
                            $author
                        </strong> 
                        <br>
                        $date
                    </p>
                </div>
                
            </div>
        </div><!-- .article-container -->
        ");
        
        // echo "<h2>$title</h2>";
        
    }
} catch (\Exception $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}

?>