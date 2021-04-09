
$('.banner-slide').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    pagination: false,
    autoplay: 1500,
    autoplaySpeed: 600,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 1
        }
    }
});

$('.testimonial-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    pagination: true,
    dots: true,
    autoplay: false,
    autoplaySpeed: 1000,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 2
        }
    }
});


$('.company-slider').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    pagination: false,
    dots: true,
    autoplay: 1000,
    autoplaySpeed: 1000,
    nav: true,
    autoplayHoverPause: true,
    navText: [prevIcon, nextIcon],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

/**accordion */
var accordions = document.getElementsByClassName("accordion");

for (var i = 0; i < accordions.length; i++) {
    accordions[i].onclick = function () {
        this.classList.toggle('is-open');

        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            // accordion is currently open, so close it
            content.style.maxHeight = null;
        } else {
            // accordion is currently closed, so open it
            content.style.maxHeight = content.scrollHeight + "px";
        }
    }
}

/**tab */
$(document).ready(function () {

    $(".tabs-list li a").click(function (e) {
        e.preventDefault();
    });

    $(".tabs-list li").click(function () {
        var tabid = $(this).find("a").attr("href");
        $(".tabs-list li,.tabs div.tab").removeClass("active"); // removing active class from tab
        $(".tab").hide(); // hiding open tab
        $(tabid).show(); // show tab
        $(this).addClass("active"); //  adding active class to clicked tab


    });

});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


// Header
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.site-header').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('.site-header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height() && $(this).scrollTop() > 100) {
            $('.site-header').removeClass('nav-up').addClass('nav-down');
        }
    }
    if ($(this).scrollTop() < 5) {
        $('.site-header').removeClass('nav-up').removeClass('nav-down');
    }

    lastScrollTop = st;
}
AOS.init({
    duration: 700
});


// Navigation
var menu_nav = document.querySelector("#burger");
var global_menu = document.querySelector('#global_menu');
var close_btn = document.querySelector('#close-btn');
var mybody = document.querySelector('body');
menu_nav.addEventListener('click', function () {
    global_menu.classList.toggle('active');
    mybody.classList.toggle('menu_active');
});

close_btn.addEventListener('click', function () {
    global_menu.classList.remove('active');
    mybody.classList.remove('menu_active');
});
