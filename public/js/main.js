$(document).ready(function () {
    // Slick slider code
    $(".mySlicker").slick({
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autospeed: 2000
    });

    // pop up
    $("#myCancel").click(function () {
        $("#myCancelbooking").modal();
    });
    $("#myBookingcode #payment_booking").click(function () {
        $("#myPaymentdetails").modal();
    });
    $("#myBtn").click(function () {
        $("#myFilter").modal();

    });
    $(".nav-tabs a").click(function () {
        $(this).tab('show');
    });

});


function errorAlert(params) {
    var message = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>' +
        params.msg + '</strong><button type = "button" class = "close"data-dismiss= "alert" aria-label= "Close">' +
        '<span aria-hidden= "true">&times;</span></button></div>';

    return message;
}


function notifier(parameters) {
    parameters = (parameters) ? parameters : '';
    var icon = (parameters.icon) ? parameters.icon : '<i class="fas fa-exclamation-circle"></i>';
    var title = (parameters.title) ? parameters.title : 'Notifier';
    var message = (parameters.message) ? parameters.message : 'Something went wrong!!';
    var autoHide = (parameters.autoHide) ? parameters.autoHide : false;
    var delay = (autoHide) ? (parameters.delay ? parameters.delay : 5000) : 0;
    var type = (parameters.type) ? parameters.type : 'notification';
    var classes = (parameters.classes) ? parameters.classes : 'custom-vm';
    $.notify.addStyle('vish-master', {
        html: '<div class="notiDiv"><div class="text-center">' + icon + '</div>' +
            '<div class="notify-content"><h5>' + title + '</h5>' +
            '<div class="master-ct">' + message + '</div></div>' +
            '</div>'
    });

    $.notify(message, {
        // whether to hide the notification on click
        clickToHide: true,
        // whether to auto-hide the notification
        autoHide: autoHide,
        // if autoHide, hide after milliseconds
        autoHideDelay: delay,
        // default positions
        globalPosition: 'top right',
        // default style
        style: 'vish-master',
        // default class (string or [string])
        className: classes,
        // show animation
        showAnimation: 'slideDown',
        // show animation duration
        showDuration: 400,
        // hide animation
        hideAnimation: 'slideUp',
        // hide animation duration
        hideDuration: 200
    });
}
