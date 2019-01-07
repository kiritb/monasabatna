$(document).ready(function () {
    $("#sign_in_form").validate({
        rules: {
            phone: {
                required: true,
                minlength: 10
            },
            password: {
                required: true,
                minlength: 5
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
            signinFn(event);
        }
    });
});

function signinFn(event) {
    var formData = $("form").serialize() + "&isWeb=" + true;
    var request = $.ajax({
        url: "login",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            var params;
            if (response.data.message) {
                params = {
                    title: "Login Success!",
                    message: response.data.message,
                    type: "notification",
                    autoHide: true,
                    delay: 10000
                };
            } else {
                params = {
                    title: "Login Error!",
                    message: "Couldn't Login!! Please try again.",
                    type: "notification",
                    autoHide: true,
                    delay: 10000
                };
            }
            notifier(params);
        },
        error: function (xhr) {
            // if error occured
            var params = {
                msg: xhr.statusText,
                closable: true
            };
            var errorIs = errorAlert(params);
            $(".bg-custsignin").prepend('<div class="error-holder"></div>');
            $(".error-holder").html(errorIs);
        },
        complete: function () {
            $("form").each(function () {
                this.reset();
            });
        }
    });
}
