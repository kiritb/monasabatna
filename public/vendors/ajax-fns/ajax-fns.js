function ajaxHtmlRender(params) {
    let overlayMask = params.overlayMask ? params.overlayMask : false;
    if (overlayMask) {
        $(params.element).overlayMask({
            do: "showLoader",
            pPos: "relative"
        });
    }

    let getParams = {
        requestType: params.type
    };

    if (params.data !== null && !jQuery.isEmptyObject(params.data)) {
        if (typeof params.data === 'object') {
            getParams = params.data;
        } else {
            getParams = querytoObject(params.data);
        }
    }

    $.ajax({
        url: base_url + params.url,
        type: params.method,
        data: getParams,
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        beforeSend: function () {
            console.log("before send!!");
        },
        success: function (response) {
            if (response.html && response.success) {
                //always pass a id as element for better results
                $(params.element).overlayMask({
                    do: "hideLoader"
                });
                $(params.element).html(response.html);
            } else {
                let html =
                    '<h3 class="m-auto text-center p-3">' +
                    "Failed to get data from API!! Please reload page." +
                    "</h3 > ";
                $(params.element).html(html);
                notifyError("Failed to get data!!");
            }
        },
        error: function (xhr) {
            // if error occured
            notifyError(xhr.statusText);
        },
        complete: function () {
            if (overlayMask) {
                $(params.element).overlayMask({
                    do: "hideLoader"
                });
            }
        }
    });
}

// same as $.ajax but settings can have a maskUI property
// if settings.maskUI==true, the UI will be blocked while ajax in progress
// if settings.maskUI is other than true, it's value will be used as the color value while bloking (i.e settings.maskUI='rgba(176,176,176,0.7)'
// in addition an hourglass is displayed while ajax in progress
function ajaxMaskUI(settings) {
    function maskPageOn(color) {
        // color can be ie. 'rgba(51,51,51,0.7)' or 'transparent'
        var div = $("#maskPageDiv");
        if (div.length === 0) {
            $(document.body).append(
                '<div id="maskPageDiv" style="position:fixed;width:100%;height:100%;left:0;top:0;display:none"></div>'
            ); // create it
            div = $("#maskPageDiv");
        }
        if (div.length !== 0) {
            div[0].style.zIndex = 2147483647;
            div[0].style.backgroundColor = color;
            div[0].style.display = "inline";
        }
    }

    function maskPageOff() {
        var div = $("#maskPageDiv");
        if (div.length !== 0) {
            div[0].style.display = "none";
            div[0].style.zIndex = "auto";
        }
    }

    function hourglassOn() {
        if ($('style:contains("html.hourGlass")').length < 1)
            $("<style>")
                .text(
                    "html.hourGlass, html.hourGlass * { cursor: wait !important; }"
                )
                .appendTo("head");
        $("html").addClass("hourGlass");
    }

    function hourglassOff() {
        $("html").removeClass("hourGlass");
    }

    if (settings.maskUI === true) settings.maskUI = "transparent";

    if (!!settings.maskUI) {
        maskPageOn(settings.maskUI);
        hourglassOn();
    }

    var dfd = new $.Deferred();
    $.ajax(settings)
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (!!settings.maskUI) {
                maskPageOff();
                hourglassOff();
            }
            dfd.reject(jqXHR, textStatus, errorThrown);
        })
        .done(function (data, textStatus, jqXHR) {
            if (!!settings.maskUI) {
                maskPageOff();
                hourglassOff();
            }
            dfd.resolve(data, textStatus, jqXHR);
        });

    return dfd.promise();
}

// an Example is given below

// $('.list').click(function () {
//     ajaxMaskUI({
//         url: "/echo/json/",
//         data: {
//             json: JSON.stringify('json'),
//             delay: 3
//         },
//         type: "POST",
//         maskUI: true // or try for example 'rgba(0,0,1,0.7)'
//     }).fail(function (jqXHR, textStatus, errorThrown) {
//         alert('error ' + textStatus);
//     }).done(function (data, textStatus, jqXHR) {
//         alert('success ' + JSON.stringify(data));
//     });
// });