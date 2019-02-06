$(document).ready(function () {

    $(".ourTeamSlicker").slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autospeed: 2000
    });

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
                notifyError("No Cities, error fetching data!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        }
    });
});
