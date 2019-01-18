$(window).on('load', function () { // makes sure the whole site is loaded
    $('.loader').fadeOut("slow"); // will first fade out the loading animation
    $('#bodyContainer').css({
        'overflow': 'visible',
        'display': 'block'
    });
})
