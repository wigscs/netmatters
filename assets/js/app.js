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
$(document).ready(function() {
    $('.banner').slick({
        adaptiveHeight: true,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3500,
    });
    $('.logo-list--accreditations').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2800,
        draggable: false,
        arrows: false,
        variableWidth: true,
    });
    $('.logo-list--clients').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2800,
        draggable: false,
        arrows: false,
        variableWidth: true,
    });
    $('.accordian').on('click', function (e) {
        e.preventDefault();
        $(e.target).parent().next('.panel').slideToggle();
    });
    /* CONTACT FORM */
    $('.pretty-checkbox').on('click', function (e) {
        e.preventDefault();
        $('.pretty-checkbox').toggleClass('active');
        const cb = $('#marketing_preferences');
        (cb.prop("checked") == true) ? cb.prop("checked", false) : cb.prop("checked", true);
    });
    $("#message").on("keypress", function() {
        this.style.overflow = "hidden",
        this.style.height = "1px",
        this.style.height = 2 + this.scrollHeight + "px"
    });
    const contactForm = $("#contact-form");
    if (contactForm.length) {
        $.validator.methods.email = function( value, element ) {
            return this.optional( element ) || /[a-z]+@[a-z]+\.[a-z]+/.test( value );
        }
        contactForm.validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                telephone: {
                    required: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            errorPlacement: function(error, element) {},
            highlight: function(t) {
                $(t).addClass("has-error");
            },
            unhighlight: function(t) {
                $(t).removeClass("has-error");
            },
            submitHandler: form => {
                form.submit();
            }
        })
    }
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
                $("#header").removeAttr("style");
                setTimeout(function() {
                    $(".sticky").remove();
                }, 250);
            }

            if (scrollDown === 0 && st > lastScrollTop) { // scroll down
                $(".sticky").addClass("slideOutUp");
                $("#header").removeAttr("style");
                setTimeout(function() {
                    $(".sticky").remove();
                }, 250);

                scrollDown++;
                scrollUp = 0;
            } else if(scrollUp === 0 && st > headerHeight && st < lastScrollTop) { // scroll up

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



