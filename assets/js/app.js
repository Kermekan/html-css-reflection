/* ------------------------------- Menu toggle ------------------------------ */
const fullPage = document.querySelector(".full-page")
const pageContainer = document.querySelector(".page-container")

const sidebarContainer = document.querySelector(".sidebar-container")
const overlay = document.querySelector(".overlay")
const menuBtn = document.querySelector("#menu-btn");

menuOpen = false;

// Open menu
menuBtn.addEventListener("click", () => {
    if(!menuOpen) {
        // add is-active class
        menuBtn.classList.add("is-active");
        sidebarContainer.classList.add("is-active");
        pageContainer.classList.add("is-active");
        fullPage.classList.add("is-active");
        menuOpen = true;
    }
});

// Close menu
overlay.addEventListener("click", () => {
    if(menuOpen == true){
        menuBtn.classList.remove("is-active");
        sidebarContainer.classList.remove("is-active");
        pageContainer.classList.remove("is-active");
        fullPage.classList.remove("is-active");
        menuOpen = false;
    }
})

/* ----------------------------- Image Carousel ----------------------------- */
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 300,
        autoplayTimeout: 4000,
        smartSpeed: 400,
        dots: true,
    });
});

/* ------------------------------ Sticky Header ----------------------------- */
(function () {
    let lastScroll = 0;
    window.addEventListener("scroll", function () {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
        body.classList.remove("scroll-up");
        return;
        }

        if (currentScroll > 300) {
            if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
                body.classList.remove("scroll-up");
                body.classList.add("scroll-down");
            } else if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
                setTimeout(function () {
                body.classList.remove("scroll-down");
                body.classList.add("scroll-up");
                }, 250);
            }
        }

        lastScroll = currentScroll;
    });
})();
















