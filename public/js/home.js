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
                params = {
                    title: "No Data!",
                    message: "No Data for why us!",
                    type: "notification",
                    autoHide: true,
                    delay: 10000
                };
                notifier(params);
            }
        },
        error: function (xhr) {
            // if error occured
            var params = {
                title: "Error!",
                message: xhr.statusText,
                type: "notification",
                autoHide: true,
                delay: 10000
            };
            notifier(params);
        }
    });
});

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
