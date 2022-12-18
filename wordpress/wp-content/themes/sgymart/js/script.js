$(function() {
    $(".menu_button").click(function () {
        $(this).toggleClass('active');
        $(".header_navi").toggleClass('active');
    });
});