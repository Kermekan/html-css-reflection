

/* ----------------------------- Image Carousel ----------------------------- */
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        // autoWidth: true,
        autoplay: true,
        autoplaySpeed: 300,
        autoplayTimeout: 4000,
        smartSpeed: 400,
        dots: true,
    });
});

/* ------------------------------ Sticky Header ----------------------------- */
// const header = document.getElementById("header");
// console.log(header);

// let lastScroll = window.scrollY;

/* ----------------------------- Cookie Consent ----------------------------- */
const cookieStorage = {
    getItem: (item) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[item];
    },
    setItem: (item, value) => {
        document.cookie = `${item}=${value};`
    }
}

const storageType = cookieStorage;
const consentPropertyName = 'netmatters_cookie-consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const consentPopup = document.getElementById('cookie-consent');
    const acceptBtn = document.getElementById('accept');

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
    }
    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType.value == false)) {
        setTimeout(() => {
            consentPopup.classList.remove('hidden');
        }, 2000);
    }

};










