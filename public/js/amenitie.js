/*$(document).ready(function(){
	$('#addAmenitiesForm').submit(function(event){
        event.preventDefault();
        var formData = new FormData(this);

        $('#addAmenitiesForm .error-class').empty();

        $.ajax({
          url: "add_amenities",
          type: "POST",
          data: formData,
          dataType: "json",
          contentType: "application/x-www-form-urlencoded",
          success:function(data){
            if (response.data.message) {
                notifySuccess(response.data.message);
                location.reload();
            } else {
                notifyError("Couldn't Login!! Please try again.");
                location.reload();
            }
          }
        });

      });
});*/
$(document).ready(function () {
    $("#addAmenitiesForm").validate({
        rules: {
            name: {
                required: true
            },
            description: {
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
            var formData = $(event).serialize() + "&isWeb=" + true;
            amentieFn(event, formData);
        }
    });
});

function amentieFn(event, formData) {
    $.ajax({
        url: "add_amenities",
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
                
            } else {
                notifyError("Couldn't Login!! Please try again.");
            }
        },
        complete: function () {
            $("form").each(function () {
                this.reset();
            });
        }
    });
}
