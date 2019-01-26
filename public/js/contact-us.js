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
                var params = {
                    title: 'Thank you!',
                    message: data.data.message,
                    type: 'notification',
                    autoHide: true,
                    delay: 10000
                };
                notifier(params);
            }
        },
        error: function (xhr) { // if error occured
            var params = {
                title: 'Error!',
                message: xhr.statusText,
                type: 'notification',
                autoHide: true,
                delay: 10000
            };
            notifier(params);
        },
        complete: function () {
            $('form').each(function () {
                this.reset();
            });
        }
    });
}
