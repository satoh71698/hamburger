$(".c-menu").click(function () {
    $(this).toggleClass("is-active");
    $(".l-sideMenu").toggleClass("is-active");
    $(".l-sideMenu__layer").toggleClass("is-active");
    $("body").toggleClass("is-active");
});

$(".l-hgmenu a").click(function () {
    $(".c-menu").removeClass("is-active");
    $(".l-sideMenu").removeClass("is-active");
    $(".l-sideMenu__layer").removeClass("is-active");
    $("body").removeClass("is-active");
});

$(function () {
    $(window).resize(function () {
        $(".c-menu").removeClass("is-active");
        $(".l-sideMenu").removeClass("is-active");
        $(".l-sideMenu__layer").removeClass("is-active");
        $("body").removeClass("is-active");
    });
});