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
let debounce_timer;
let lastScrollTop = 0;
let headerHeight = $("#header").outerHeight();

let scrollDown = 0;
let scrollUp = 0;

$(window).on('scroll', function() {
    if (debounce_timer) {
        window.clearTimeout(debounce_timer);
	}
	debounce_timer = window.setTimeout(function() {
        let st = $(this).scrollTop();

        if (lastScrollTop) {
            // if at the top of the page, remove the sticky header
            if (st === 0) {
                console.log('REMOVE 1');
                $("#header").removeAttr("style");
                setTimeout(function() {
                    $(".sticky").remove();
                }, 250);
            }

            if (scrollDown === 0 && st > lastScrollTop) { // scroll down
                console.log('DOWN');

                $(".sticky").addClass("slideOutUp");
                $("#header").removeAttr("style");
                setTimeout(function() {
                    $(".sticky").remove();
                }, 250);

                scrollDown++;
                scrollUp = 0;
            } else if(scrollUp === 0 && st > headerHeight && st < lastScrollTop) { // scroll up
                console.log('UP');

                $("#header").css("visibility", "hidden");
                $("body").append('<div class="sticky">' + $("#header").html() + "</div>");
                $(".sticky").addClass("slideInDown");

                scrollUp++;
                scrollDown = 0;
            }
        }
        lastScrollTop = st;
	}, 50); 
});



