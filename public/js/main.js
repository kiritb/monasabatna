$(document).ready(function () {
    // Slick slider code
    $(".mySlicker").slick({
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autospeed: 2000
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        autoplay: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 11,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        autoplay: true,
        focusOnSelect: true,
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

    $(".more").shorten({
        "showChars": 200,
        "moreText": "More",
        "lessText": "Less",
    });

});


function notifier(parameters) {
    parameters = (parameters) ? parameters : '';
    let icon = (parameters.icon) ? parameters.icon : '';
    let title = (parameters.title) ? parameters.title : 'Notifier';
    let message = (parameters.message) ? parameters.message : 'Something went wrong!!';
    let autoHide = (parameters.autoHide) ? parameters.autoHide : false;
    let delay = (autoHide) ? (parameters.delay ? parameters.delay : 5000) : 0;
    let type = (parameters.type) ? parameters.type : 'notification';

    let typeClass;
    switch (type) {
        case 'info':
            typeClass = 'alert-info';
            icon = '<i class="fa fa-info-circle" aria-hidden="true"></i>';
            break;

        case 'warning':
            typeClass = 'alert-warning';
            icon = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
            break;

        case 'danger':
            typeClass = 'alert-danger';
            icon = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>';
            break;

        default:
            typeClass = 'alert-success';
            icon = '<i class="fas fa-check" aria-hidden="true"></i>';
            break;
    }

    let classes = (parameters.classes) ? parameters.classes : 'custom-vm';
    $.notify.addStyle('master', {
        html: '<div>' +
            '<div class="alert ' + typeClass + '">' +
            '<div class="text-center">' + icon + '</div>' +
            '<div class="notify-content"><h5>' + title + '</h5>' +
            '<div class="master-ct">' + message + '</div></div>' +
            '</div>' +
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
        style: 'master',
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

function logout() {
    $.ajax({
        url: "logout",
        type: "GET",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            var params;
            if (response.data.message) {
                params = {
                    title: "Logout Success!",
                    message: response.data.message,
                    type: "success",
                    autoHide: true,
                    delay: 10000
                };
                location.reload();
            } else {
                params = {
                    title: "Logout",
                    message: "Couldn't Logged!!.",
                    type: "danger",
                    autoHide: true,
                    delay: 10000
                };
            }
            notifier(params);
        },
        error: function (xhr) {
            // if error occured
            params = {
                title: "Error!",
                message: xhr.statusText,
                type: "danger",
                autoHide: true,
                delay: 10000
            };

            notifier(params);
        }
    });
}
