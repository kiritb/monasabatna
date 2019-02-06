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
                var lists = '';
                $.each(response.data, function (k, v) {
                    lists += '<option value="' + v.id + '">' + v.name + '</option>';
                });
                $("#citiesList").append(lists);

                //Initializing datepicker

                $('#datapack .datepicker').datepicker({
                    uiLibrary: 'bootstrap4',
                    format: 'yyyy-mm-dd'
                });

                $('#labpack .datepicker').datepicker({
                    uiLibrary: 'bootstrap4',
                    format: 'yyyy-mm-dd'
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
            $("#cityDateForm").validate({
                rules: {
                    cityName: {
                        required: true,
                        minlength: 1
                    },
                    startDate: {
                        required: true
                    },
                    endDate: {
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
                },
                submitHandler: function (event) {
                    var formData = $('form').serialize();
                    getResults(event, formData);
                }
            });
        }
    });
});


function getResults(event, formData) {
    alert("Getting Results");
    console.log(formData);
}
