$(document).ready(function () {
    $("#cityDateForm").overlayMask({
        do: "showLoader",
        pPos: "relative"
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
                    do: "hideLoader"
                });
                // cities from API
                var lists = "";
                $.each(response.data, function (k, v) {
                    lists +=
                        '<option value="' + v.id + '">' + v.name + "</option>";
                });
                $("#citiesList").append(lists);

                //Initializing datepicker

                $("#datapack .datepicker").datepicker({
                    uiLibrary: "bootstrap4",
                    format: "yyyy-mm-dd",
                    showOtherMonths: true,
                    calendarWeeks: true
                });

                $("#labpack .datepicker").datepicker({
                    uiLibrary: "bootstrap4",
                    format: "yyyy-mm-dd",
                    showOtherMonths: true,
                    calendarWeeks: true
                });
            } else {
                notifyError("No Cities, error fetching data!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        },
        complete: function () {
            console.log("inside complete!!");
        }
    });
});

var validateForm = function (formId) {
    $("#" + formId).validate({
        ignore: "",
        rules: {
            pageType: {
                required: true
            },
            from_date: {
                required: true
            },
            to_date: {
                required: true
            }
        },
        errorPlacement: function (error, element) {
            return true;
        },
        highlight: function (element, errorClass, validClass) {
            $(element)
                .addClass("is-invalid")
                .removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element)
                .addClass("is-valid")
                .removeClass("is-invalid");
        }
    });

    if ($("#" + formId).valid()) {
        let formOfDate = "#" + formId;
        var formData = $(formOfDate).serialize();
        let pageType = $(formOfDate + " " + "input[name=pageType]").val();
        filterByCityDate(formData, pageType);
    }
};
