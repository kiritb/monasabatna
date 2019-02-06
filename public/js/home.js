$(document).ready(function () {
    $.ajax({
        url: "api/v1/whyus",
        type: "GET",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            var params;
            if (response.data) {
                let whyText = '';
                let textLength = 0;
                response.data.forEach(element => {
                    textLength += element.length;
                    whyText += element;
                });
                let charCount = 1200;
                $(".why-us").html('<p class="why_text">' + whyText + '</p>');
                $(".why_text").shorten({
                    "showChars": charCount,
                    "moreText": "More",
                    "lessText": "Less",
                });
            } else {
                notifyError("No Data for why us!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        }
    });

    $("#facilitate-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
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
            event_date: {
                required: true,
                date: true
            },
            event_type: {
                required: true
            },
            no_of_guests: {
                required: true,
                minlength: 1
            },
            food_type: {
                required: true
            },
            decoration_type: {
                required: true
            },
            budget: {
                required: true
            },
            note: {
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
            faciLitate(event, formData);
        }
    });

    $('#facilitate-form .datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd'
    });
});

function faciLitate(event, formData) {
    $.ajax({
        url: base_url + "/facilitate",
        type: "POST",
        data: formData,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("inside beforeSend!!");
        },
        success: function (response) {
            if (response.data) {
                notifySuccess(response.data.message);
            } else {
                notifyError("No Data for why us!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        }
    });
}

// Testimonial
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    if (dots.length) {
        dots[slideIndex - 1].className += " active";
    }
}

// countdown with background
$('.count').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
