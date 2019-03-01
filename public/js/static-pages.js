$(document).ready(function () {

    $(".ourTeamSlicker").slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autospeed: 2000
    });

    if (window.location.href.indexOf("/contactus") > -1) {
        getAboutData();
    }

    if (window.location.href.indexOf("/whyus") > -1) {
        getWhyUsData();
    }

});

var getAboutData = function () {
    $(".leftcontact").overlayMask({
        do: "showLoader"
    });
    $.ajax({
        url: base_url + "/api/v1/aboutus",
        type: "GET",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            var params;
            if (response.data && response.data.address) {
                $(".leftcontact").overlayMask({
                    do: "hideLoader"
                });

                $(".leftcontact").html(JSON.stringify(response.data.address));

            } else {
                notifyError("No address, error fetching data!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        }
    });
};

var getWhyUsData = function () {
    $("#whyus-align").overlayMask({
        do: "showLoader"
    });
    $.ajax({
        url: base_url + "/api/v1/whyus",
        type: "GET",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            var params;
            if (response.data && response.data.length) {
                $("#whyus-align").overlayMask({
                    do: "hideLoader"
                });
                // cities from API
                var whyusdata = '';

                $.each(response.data, function (k, v) {
                    whyusdata += '<p>' + v + '</p>';
                });

                $("#whyus-container").append(whyusdata);

            } else {
                notifyError("Awwww, Error fetching data!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        }
    });
};
