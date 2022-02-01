/* ------------------------------- Menu toggle ------------------------------ */
const body = document.querySelector("body")
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