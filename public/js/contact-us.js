$(document).ready(function () {
    $("#contact-us-form").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3
            },
            fathers_name: {
                required: true,
                minlength: 1
            },
            family_name: {
                required: true,
                minlength: 1
            },
            email: {
                required: true,
                email: true
            },
            country_code: {
                required: true,
                minlength: 1
            },
            phone_number: {
                required: true,
                minlength: 10
            },
            message: {
                required: true,
                minlength: 10
            }
        },
        errorPlacement: function (error, element) {
            return true;
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        },
        submitHandler: function (event) {
            var formData = $('form').serialize();
            contactUs(event, formData);
        }
    });
});

function contactUs(event, formData) {
    $.ajax({
        url: base_url + "/api/v1/contactus",
        type: "POST",
        data: formData,
        timeout: 0,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (data) {
            if (data.data.message) {
                notifySuccess(data.data.message);
            }
        },
        error: function (xhr) { // if error occured
            notifyError(xhr.statusText);
        },
        complete: function () {
            $('form').each(function () {
                this.reset();
            });
        }
    });
}
