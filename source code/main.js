$(document).ready(function(){
    $('.nav-user').popover();
});
function openNav() {
    $(".sidebar").css("width", "19rem");
}

function closeNav() {
    $('.sidebar').css("width", "0");
    $('[data-toggle="popover"]').popover("hide");
    this.$('#collapseSection').collapse("hide");
}

