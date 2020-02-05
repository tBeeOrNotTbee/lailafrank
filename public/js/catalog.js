$(document).ready(function() {
/* $('.carousel').carousel({
    interval: 500,
}); */
$('.carousel').carousel('pause');
$(".carousel").on("mouseenter", function () {
    $(this).carousel('cycle');
}).on("mouseleave", function () {
    $(this).carousel('pause');
})
})
