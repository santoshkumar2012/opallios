"use strict";
var $ = jQuery;

function updateWrapper() {
    var takeHeight = $(".takeHeight").outerHeight();
    var takeHeightAlt = $(".takeHeightAlt").outerHeight();
    var takeHeight2 = $(".takeHeight2").outerHeight();
    var takeHeight3 = $(".takeHeight3").outerHeight();
    var takeHeight4 = $(".takeHeight4").outerHeight();
    $(".giveHeight").css({ paddingBottom: takeHeight });
    $(".giveHeightAlt").css({ paddingBottom: takeHeightAlt });
    $(".giveHeight2").css({ paddingBottom: takeHeight2 });
    $(".giveHeight3").css({ paddingBottom: takeHeight3 });
    $(".giveHeight4").css({ paddingBottom: takeHeight4 });
}

$(document).ready(function () {
    updateWrapper();
    $(window).resize(function () {
        updateWrapper();
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#pageHeaderWrapper').addClass('is-sticky');
            $('.progress-wrap').addClass('show');

        } else {
            $("#pageHeaderWrapper").removeClass("is-sticky");
            $('.progress-wrap').removeClass('show');
        }
    });
});
$(document).ready(function () {
    $(".nav-container .nav").meanmenu({
        meanScreenWidth: "1199.98",
    });
});
$(document).ready(function () {
    updateContainer();
    $(window).resize(function () {
        updateContainer();
    });
});


    //Scroll to top
    window.addEventListener("scroll", function () {
        const progressPath = document.querySelector(".progress-wrap path");
        const pathLength = progressPath.getTotalLength();

        // Calculate scroll position
        const scroll = window.scrollY;
        const height = document.documentElement.scrollHeight - window.innerHeight;
        const progress = pathLength - (scroll * pathLength / height);

        // Set stroke offset
        progressPath.style.strokeDashoffset = progress;
    });
    document.querySelector(".progress-wrap").addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
    //Scroll to top END
