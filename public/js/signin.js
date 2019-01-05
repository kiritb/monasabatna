$(document).ready(function() {
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
        errorPlacement: function(error, element) {
            return true;
        },
        highlight: function(element, errorClass, validClass) {
            $(element)
                .addClass("is-invalid")
                .removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element)
                .addClass("is-valid")
                .removeClass("is-invalid");
        },
        submitHandler: function(event) {
            signinFn(event);
        }
    });
});

function signinFn(event) {
    debugger;
    var formData = $("form").serialize();
    var request = $.ajax({
        url: "login",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function() {
            console.log("inside beforeSend!!");
        },
        success: function(data) {
            var params;
            if (data.data.authtoken) {
                Cookies.set("authtoken", data.data.authtoken);
                params = {
                    title: "Login Success!",
                    message: "Successfully logged in!!",
                    type: "notification",
                    autoHide: true,
                    delay: 10000
                };
                notifier(params);
                alert(Cookies.get("authtoken"));
            } else {
                params = {
                    title: "Login Error!",
                    message: "No Authtoken!! Please try again.",
                    type: "notification",
                    autoHide: true,
                    delay: 10000
                };
                notifier(params);
            }
        },
        error: function(xhr) {
            // if error occured
            var params = {
                msg: xhr.statusText,
                closable: true
            };
            var errorIs = errorAlert(params);
            $(".bg-custsignin").prepend('<div class="error-holder"></div>');
            $(".error-holder").html(errorIs);
        },
        complete: function() {
            $("form").each(function() {
                this.reset();
            });
        }
    });
}
