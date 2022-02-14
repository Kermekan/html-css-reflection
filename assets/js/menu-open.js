/* ------------------------------- Menu toggle ------------------------------ */
const body = document.querySelector("body")
const fullPage = document.querySelector(".full-page")
const pageContainer = document.querySelector(".page-container")

const sidebarContainer = document.querySelector(".sidebar-container")
const overlay = document.querySelector(".overlay")
const menuBtn1 = document.querySelector(".sticky-header .menu-btn");
const menuBtn2 = document.querySelector(".fixed-header .menu-btn");

menuOpen = false;

// menuBtn1 open
menuBtn2.addEventListener("click", () => {
    if(!menuOpen) {
        // add is-active class
        menuBtn2.classList.add("is-active");
        sidebarContainer.classList.add("is-active");
        pageContainer.classList.add("is-active");
        fullPage.classList.add("is-active");
        menuOpen = true;
    }
});

// menuBtn1 open
menuBtn1.addEventListener("click", () => {
    if(!menuOpen) {
        // add is-active class
        menuBtn1.classList.add("is-active");
        sidebarContainer.classList.add("is-active");
        pageContainer.classList.add("is-active");
        fullPage.classList.add("is-active");
        menuOpen = true;
    }
});

// Close menu
overlay.addEventListener("click", () => {
    if(menuOpen == true){
        menuBtn2.classList.remove("is-active");
        menuBtn1.classList.remove("is-active");
        sidebarContainer.classList.remove("is-active");
        pageContainer.classList.remove("is-active");
        fullPage.classList.remove("is-active");
        menuOpen = false;
    }
})