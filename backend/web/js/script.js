$(document).ready(function () {
    var trigger = $('.hamburger');
    var isClosed = false;

    var infobar = $('.infobar');

    var isMobile = window.matchMedia("only screen and (max-width: 768px)");

    if (isMobile.matches) {
        // Force sidebar to closed state
        isClosed = true;
        trigger.removeClass('is-open');
        infobar.removeClass('is-open');
        trigger.addClass('is-closed');
        $('#wrapper').toggleClass('toggled');
        //hamburger_cross();
    }

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {
        if (isClosed == true) {
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            infobar.addClass('is-open');
            isClosed = false;
        } else {
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            infobar.removeClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });



});
