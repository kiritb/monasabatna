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

    $("#vendor_sign_up_form").validate({
        rules: {
            'company_name': {
                required: true,
                minlength: 3
            },
            'logo_upload_file': {
                required: true,
                accept: "image/*",
                extension: "jpg|jpeg|png|gif"
            },
            'primary_countryCode': {
                required: true,
                minlength: 2
            },
            'primary_phone_no': {
                required: true,
                minlength: 10
            },
            'secondary_countryCode': {
                required: true,
                minlength: 2
            },
            'secondary_phone_no': {
                required: true,
                minlength: 10
            },
            'alternate_countryCode': {
                required: true,
                minlength: 2
            },
            'alternate_phone_no': {
                required: true,
                minlength: 10
            },
            'email': {
                required: true,
                email: true
            },
            'country_id': {
                required: true,
                minlength: 1
            },
            'city_id': {
                required: true,
                minlength: 1
            },
            'address_line_1': {
                required: true,
                minlength: 5
            },
            'address_line_2': {
                required: true,
                minlength: 5
            },
            'google_map_link': {
                required: true,
                minlength: 10
            },
            'vendor_note': {
                required: true,
                minlength: 10
            },
            'id_name': {
                required: true,
                minlength: 5
            },
            'license_no': {
                required: true,
                minlength: 6
            },
            'license_upload_file': {
                required: true,
                accept: "image/*",
                extension: "jpg|jpeg|png|gif"
            },
            'id_upload_file': {
                required: true,
                accept: "image/*",
                extension: "jpg|jpeg|png|gif"
            },
            'password': {
                required: true,
                minlength: 5
            },
            'password_confirmation': {
                required: true,
                minlength: 5,
                equalTo: "#vendorPassword"
            },
            'fb_link': {
                required: true
            },
            'twitter_link': {
                required: true
            },
            'account_name': {
                required: true
            },
            'bank_name': {
                required: true
            },
            'iban_name': {
                required: true
            },
            'account_number': {
                required: true
            },
            'payment_method': {
                required: true
            },
            'terms_conditions': {
                required: true
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
            let formData = new FormData($('form#vendor_sign_up_form')[0]);
            vendorSignupFn(event, formData);
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
            let formData = $(event).serialize();
            verifyOtp(event, formData);
        }
    });

    $("#vendor_sign_in_form").validate({
        rules: {
            email: {
                required: true,
                email: true
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
            var formData = $(event).serialize() + "&isWeb=" + true;
            vendorSigninFn(event, formData);
        }
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
                // cities from API
                var lists = '';
                $.each(response.data, function (k, v) {
                    lists += '<option value="' + v.id + '">' + v.name + '</option>';
                });
                $("#inputForCities").append(lists);

            } else {
                notifyError("No Cities, error fetching data!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        },
        complete: function () {
            console.log("completed!");
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
            if (data.data && data.data.otp) {
                notifyInfo(data.data.smsText);
                $("#myBookingOTP").modal("show");
                $("#myBookingOTP").on('shown.bs.modal', function () {
                    $("#myBookingOTP .otpholder").html("Yor OTP is: " + data.data.otp + " Please enter below.");
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

function vendorSigninFn(event, formData) {
    $.ajax({
        url: "login",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            if (response.data.message) {
                notifySuccess(response.data.message);
                location.reload();
            } else {
                notifyError("Couldn't Login!! Please try again.");
            }
        },
        error: function (xhr) {
            notifyError(xhr.responseJSON.error.errors['0']);
        },
        complete: function () {
            $("form").each(function () {
                this.reset();
            });
        }
    });
}

function vendorSignupFn(event, formData) {
    var request = $.ajax({
        url: base_url + "/api/v1/vendor",
        type: "POST",
        data: formData,
        dataType: "json",
        enctype: 'multipart/form-data',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false,
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (data) {
            notifyInfo(data.data.smsText);
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
