
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

/* ------------------------------ Sticky Header ----------------------------- */

let lastScrollTop = 0;

$(fullPage).scroll(function() {

    const scrollTop = $(this).scrollTop();
    
    if (scrollTop > lastScrollTop) {
        // Scroll Down
        $('.sticky-header').removeClass("slide-down");
        $('.sticky-header').addClass("slide-up");
        $('.fixed-header').css("z-index", "0");
        
    } else {
        // Scroll up
        $('.sticky-header').removeClass("slide-up");
        $('.sticky-header').addClass("slide-down");
        $('.fixed-header').css("z-index", "2");
    }
    lastScrollTop = scrollTop;
    
});

/* ----------------------------- Cookie Consent ----------------------------- */
// Get and set cookie
const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value};`
    }
}

const storageType = cookieStorage;
const consentPropertyName = 'netmatters_cookie-consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
// Save cookie
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

// show cookie popup on load
window.onload = () => {
    const consentPopup = document.getElementById('cookie-consent');
    const acceptBtn = document.getElementById('accept');
    
    // add cookies on button click
    const acceptFn = () => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
    }
    acceptBtn.addEventListener('click', acceptFn);

    // if no cookie then show
    if (shouldShowPopup(storageType)) {
        consentPopup.classList.remove('hidden');
        
    }
};










