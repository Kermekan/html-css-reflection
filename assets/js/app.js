/* ----------------------------- Image Carousel ----------------------------- */
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        // autoWidth: true,
        autoplay: true,
        autoplaySpeed: 300,
        autoplayTimeout: 4000,
        smartSpeed: 200,
        dots: true,
    });
});

// const accordionItem = document.querySelector(".accordion .item");
AccordionOpen = false;

$(".item--head").click(function(){
    if (!AccordionOpen) {
        $(".accordion .item").addClass("active");
        $(this).parent().addClass("active");
        AccordionOpen = true
    } else {
        $(".accordion .item").removeClass("active");
        $(this).parent().removeClass("active"); 
        AccordionOpen = false;
    }
    
});

