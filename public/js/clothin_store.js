$(document).ready(function () {
    //$('.caption').slideDown('slow');

    $('.navbar-form').mouseenter(function () {
        $('.search-btn').animate({transform: 'rotate(360deg)'},'fast',function () {
            $('#search').show('slow');
        });
    });
    $('.navbar-form').mouseleave(function () {
        $('#search').hide('slow');
    });
})