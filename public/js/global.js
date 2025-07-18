$(document).ready(function() {
    //---------start----------

    // toggle header style on scroll
    $(window).on("scroll", function(e) {
        var top = $(this).scrollTop();
        
        // header
        if (top > 1) {
            $("header").css({"top": "0", "background": "rgba(249, 193, 225, 0.95)"});
        } else {
            $("header").css({"top": "0px", "background": "rgba(249, 193, 225, 0.9)"});
        }

        // reveal button takes you back to top
        if (top > 100) {
            $(".back-to-top").addClass("active");
        } else {
            $(".back-to-top").removeClass("active");
        }
    });

    // Add click handler for back to top
    $(".back-to-top").on("click", function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 800);
    });
    
    // toggle nav menu
    $(".menu").on("click", function() {
        $(".mobile-nav").toggleClass("active");
    });

    // set the year in footer
    $("#footerYear").html(new Date().getFullYear().toString());

    //----------end------------
});