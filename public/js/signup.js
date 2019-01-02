$(document).ready(function () {
    $("#sign_up_form").validate({
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
            password: {
                required: true,
                minlength: 5
            },
            password_confirmation: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            countryCode: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
                minlength: 10
            },
            terms_and_conditions: "required"
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
            signupFn(event);
        }
    });

    $("#otp_verify_form").validate({
        rules: {
            otp: {
                required: true,
                minlength: 4,
                maxlength: 4
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
            verifyOtp(event);
        }
    });
});

function signupFn(event) {
    var formData = $('form').serialize();
    var request = $.ajax({
        url: "api/v1/users",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (data) {
            if (data.data && data.data.otp) {
                var params = {
                    title: 'Registration Success!',
                    message: data.data.smsText,
                    type: 'notification',
                    autoHide: true,
                    delay: 10000
                };
                notifier(params);
                $("#myBookingOTP").modal("show");
                $("#myBookingOTP").on('shown.bs.modal', function () {
                    $("#myBookingOTP .otpholder").html("Yor OTP is: " + data.data.otp + " Please enter below.");
                    $("#otp_verify_form #divInner").append('<input type="hidden" name="user_id" value="' + data.data.id + '"/>');
                });
            }
        },
        error: function (xhr) { // if error occured
            var params = {
                msg: xhr.statusText,
                closable: true
            };
            var errorIs = errorAlert(params);
            $(".bg-custsignup").prepend('<div class="error-holder"></div>');
            $(".error-holder").html(errorIs);
        },
        complete: function () {
            $('form').each(function () {
                this.reset();
            });
        }
    });
}

function verifyOtp(event) {
    var formData = $('form').serialize();
    var request = $.ajax({
        url: "api/v1/verifyotp",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (data) {
            var params = {
                title: 'Success!',
                message: 'Account Verified Successfully!! Login Now.',
                type: 'notification',
                autoHide: true,
                delay: 10000
            };
            notifier(params);
            $('#myBookingOTP').modal('toggle');
        },
        error: function (xhr) { // if error occured
            var params = {
                msg: xhr.statusText,
                closable: true
            };
            var errorIs = errorAlert(params);
            $("#myBookingOTP .otpholder").html(errorIs);
        },
        complete: function () {
            $('form').each(function () {
                this.reset();
            });
        }
    });
}

function next(el) {
    el.setFocus();
}
