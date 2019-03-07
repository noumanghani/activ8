$(document).ready(function () {

    //initialize swiper when document ready
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination'
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    });

    //toggling password
    $(".toggle-password,.toggle-password > .checkmark").on('click', function () {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });

    //add class sticky to analytics search bar
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 100) {

        } else {
            //remove the background property so it comes transparent again (defined in your css)
        }
    });


    // import {MDCList} from "@material/list";
    // const list = MDCList.attachTo(document.querySelector('.mdc-list'));
    // list.wrapFocus = true;
    // const drawer = MDCDrawer.attachTo(document.querySelector('.mdc-drawer'));
});