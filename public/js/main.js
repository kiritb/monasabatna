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

    // Select2 related code
    $(".select2").select2();

});

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
                location.reload();
            } else {
                notifyError("Couldn't Logged!!.");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        }
    });
}
