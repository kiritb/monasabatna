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
            var formData = $(event).serialize() + "&isWeb=" + true;
            signinFn(event, formData);
        }
    });
});

function signinFn(event, formData) {
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
