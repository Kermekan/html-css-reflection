/* ------------------------------ Sticky Header ----------------------------- */
let lastScrollTop = 0;

body.addEventListener("scroll", function() {
    const currentScroll = body.scrollTop;
    
    if (currentScroll <= 0) {
        body.classList.remove("scroll-up");
		return;
    }
    
    if (currentScroll >= 50) {
        if (currentScroll > lastScrollTop && !body.classList.contains("scroll-down")) {
            // Remove Header on scroll down
            body.classList.remove("scroll-up")
            body.classList.add("scroll-down")
        } else if (currentScroll < lastScrollTop && body.classList.contains("scroll-down")) {
            // Show Header on Scroll up
            setTimeout (function () {
                body.classList.remove("scroll-down")
                body.classList.add("scroll-up")
            }, 250);
        }
    }
    
    lastScrollTop = currentScroll;
    // console.log(currentScroll);
});
