$(window).on('load', function sidebarPanel() {
    var viewportWidth = $(window).width();
    if (viewportWidth < 768) {
        $(".sidebar").removeClass("sidebar").addClass("sidebar collapse");
    } else {
        $(".sidebar").removeClass("sidebar collapse").addClass("sidebar");
    }
});
$(window).on('resize', function sidebarPanel() {
    var viewportWidth = $(window).width();
    if (viewportWidth < 768) {
        $(".sidebar").removeClass("sidebar").addClass("sidebar collapse");
    } else {
        $(".sidebar").removeClass("sidebar collapse").addClass("sidebar");
    }
});