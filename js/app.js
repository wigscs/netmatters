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

/*
 *  Homepage banner carousel
 */
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
 * Hamburger side menu
 */

// listen for clicks on the main body to close the side menu
$(document).on('click', '.hamburger--spin, .menu-active #container, .menu-active .sticky', function (e) {
    $('.hamburger--spin').toggleClass('is-active');
    $('body').toggleClass('menu-active');
});

/** 
 * Sticky header 
 */
let windowPosition = 0;
let headerHeight = $("#header").outerHeight();
let scrollDown = 0;
let scrollUp = 0;

$(window).scroll(function() {
    let scrollPosition = $(this).scrollTop();

    if (scrollPosition == 0) {
        $("#header").removeAttr("style");
        setTimeout(function() {
            $(".sticky").remove();
        }, 250);
    }
    window.setTimeout(function() {
        if (scrollPosition > windowPosition) { // scrolling down
            if (scrollDown === 0) { 
                // console.log('down', scrollPosition, headerHeight);
                $(".sticky").addClass("slideOutUp");
                $("#header").removeAttr("style");
                setTimeout(function() {
                    $(".sticky").remove();
                }, 250);
                scrollDown++;
                scrollUp = 0;
            }
        } else { // scrolling up
            if (scrollUp === 0 && scrollPosition > headerHeight) { 
                // console.log('up', scrollPosition, headerHeight);

                $("#header").css("visibility", "hidden");
                $("body").append('<div class="sticky">' + $("#header").html() + "</div>");
                $(".sticky").addClass("slideInDown");
                scrollUp++;
                scrollDown = 0;
            }
        }

        windowPosition = scrollPosition;
    }, 50)
})


