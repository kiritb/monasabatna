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
            let formData = $(event).serialize();
            signupFn(event, formData);
        }
    });

    $("#otp_verify_form").validate({
        ignore: "",
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
            let formData = $(event).serialize();
            verifyOtp(event, formData);
        }
    });
});

function signupFn(event, formData) {
    let signupFormData = formData + "&isWeb=true";
    var request = $.ajax({
        url: "users",
        type: "POST",
        data: signupFormData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (data) {
            if (data.data.id && data.data.otp_type) {
                notifyInfo("OTP has been sent to your registered phone number, please enter and verify account!!");
                $("#myBookingOTP").modal("show");
                $("#myBookingOTP").on('shown.bs.modal', function () {
                    $("#myBookingOTP .otpholder").html("If you reload page, you will not be registered... you may need to contact support team!!!");
                    $("#otp_verify_form #divInner").append('<input type="hidden" name="user_id" value="' + data.data.id + '"/>');
                });
            }
        },
        error: function (xhr) { // if error occured
            notifyError(xhr.responseJSON.error.errors['0']);
        },
        complete: function () {
            $('form').each(function () {
                this.reset();
            });
        }
    });
}

function verifyOtp(event, formData) {
    var request = $.ajax({
        url: base_url + "/verifyotp",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (data) {
            notifySuccess('Account Verified Successfully!! Login Now.');
            $('#myBookingOTP').modal('toggle');
        },
        error: function (xhr) { // if error occured
            notifyError(xhr.responseJSON.error.errors['0']);
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
