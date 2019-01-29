$(document).ready(function () {

    $(".ourTeamSlicker").slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autospeed: 2000
    });

    $("#whyus-align").overlayMask({
        do: "show"
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
                    do: "hide"
                });
                // cities from API
                var whyusdata = '';

                $.each(response.data, function (k, v) {
                    whyusdata += '<p>' + v + '</p>';
                });

                $("#whyus-container").append(whyusdata);

            } else {
                params = {
                    title: "No Cities!",
                    message: "No Cities, error fetching data!",
                    type: "notification",
                    autoHide: true,
                    delay: 10000
                };
                notifier(params);
            }
        },
        error: function (xhr) {
            // if error occured
            var params = {
                title: "Error!",
                message: xhr.statusText,
                type: "notification",
                autoHide: true,
                delay: 10000
            };
            notifier(params);
        }
    });
});
