$(document).ready(function () {
    $("#cityDateForm").overlayMask({
        do: "show"
    });
    $.ajax({
        url: base_url + "/api/v1/cities",
        type: "GET",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {

            var params;
            if (response.data && response.data.length) {
                $("#cityDateForm").overlayMask({
                    do: "hide"
                });
                // cities from API
                var lists = '';
                $.each(response.data, function (k, v) {
                    lists += '<option value="' + v + '">' + v + '</option>';
                });
                $("#citiesList").append(lists);

                //Initializing datepicker

                $('#datapack .datepicker').datepicker({
                    uiLibrary: 'bootstrap4'
                });

                $('#labpack .datepicker').datepicker({
                    uiLibrary: 'bootstrap4'
                });

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
