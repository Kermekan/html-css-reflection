

/* ----------------------------- Image Carousel ----------------------------- */
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        // autoWidth: true,
        autoplay: true,
        autoplaySpeed: 300,
        autoplayTimeout: 4000,
        smartSpeed: 2000,
        dots: true,
    });
});

/* ------------------------------ Sticky Header ----------------------------- */

let lastScrollTop = 0;

$(fullPage).scroll(function() {

    const scrollTop = $(this).scrollTop();
    
    if (scrollTop > lastScrollTop) {
        // Scroll Down
        $('.header-container2').removeClass("slide-down");
        $('.header-container2').addClass("slide-up");
        $('.header-container1').css("z-index", "1");
        
    } else {
        // Scroll up
        $('.header-container2').removeClass("slide-up");
        $('.header-container2').addClass("slide-down");
        $('.header-container1').css("z-index", "2");
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










