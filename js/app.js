// Homepage banner carousel
$(document).ready(function(){
    $('.banner').slick({
        adaptiveHeight: true,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3500,
    });
});

/** 
 * Cookie consent modal 
 */
const acceptCookies = document.getElementById('btn-accept-cookies');
const manageCookies = document.getElementById('btn-manage-consent');
const consentModal = document.querySelector('.cookie-consent');

if (!localStorage.getItem("cookie-consent")) {
    consentModal.style.display = '';
}

acceptCookies.addEventListener('click', function(e) {
    localStorage.setItem("cookie-consent", true);
    consentModal.style.display = consentModal.style.display === 'none' ? '' : 'none';
});

manageCookies.addEventListener('click', function(e) {
    consentModal.style.display = consentModal.style.display === 'none' ? '' : 'none';
});