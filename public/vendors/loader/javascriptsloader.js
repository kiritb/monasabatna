/*
 * Code for Global Loader goes here - starts
 */

$.fn.overlayMask = function (action) {
    // if no input data parameters
    if (undefined == action) {
        var error = "No parameters passed to OverlayMask loader at: ";
        console.log(error, this);
        return false;
    }

    // Adding a overlayMask class
    var insertafterme = false;
    if (action.insertafterme) {
        insertafterme = action.insertafterme;
    }

    var mask = this.children(".overlay-mask");
    if (insertafterme) {
        mask = this.next(".overlay-mask");
    }

    var bgsize = 75; // background size is 75px by default
    var bghalf = bgsize / 2 + "px";
    var fiftyprcnt = "50%";
    var fourtyfiveprcnt = "45%";
    var minSize = 85; // minimum size will be always 85px by default which +10 of bgsize bcz parent div should be more than background image

    // Defaults
    var pPos = "initial";
    var pOverflow = "hidden";
    var bgc = "rgba(0, 0, 0, 0.11)";
    var bgsizePx = bgsize + "px";
    var minSizePx = minSize + "px";
    var pos = "absolute";
    var bgimg = base_url + "/vendors/loader/bars.svg"; //'loader.gif';
    var zIndex = 2000;
    var displayParent = "visible";

    if (mask.length && action.do === "hide") {
        if (action.fadeOut) {
            mask.fadeOut(action.fadeOut);
        } else {
            // Act based on params, if hide then remove loader div
            mask.remove();
        }
        this.removeAttr("style");
    } else if (!mask.length && action.do === "show") {
        if (action.pPos !== "" && action.pPos !== undefined) {
            pPos = action.pPos;
        }

        if (action.bgc !== "" && action.bgc !== undefined) {
            bgc = action.bgc;
        }

        if (action.bgsize !== "" && action.bgsize !== undefined) {
            bgsizePx = action.bgsize + "px";
            minSizePx = action.bgsize + 10 + "px";
        }

        if (action.pos !== "" && action.pos !== undefined) {
            pos = action.pos;
        }

        if (action.img !== "" && action.img !== undefined) {
            bgimg = action.img;
        }

        if (action.zIndex) {
            zIndex = action.zIndex;
        }

        if (insertafterme) {
            displayParent = "hidden";
        }

        this.css({
            position: pPos,
            overflow: pOverflow,
            visibility: displayParent
        });

        var maskCss = {
            position: pos,
            width: "100%",
            height: "100%",
            top: "0px",
            left: "0px",
            zIndex: zIndex,
            backgroundColor: bgc,
            minHeight: minSizePx
        };

        var childCss = {
            backgroundImage: "url(" + bgimg + ")",
            backgroundSize: bgsizePx,
            width: bgsizePx,
            height: bgsizePx,
            left: "calc(" + fiftyprcnt + " - " + bghalf + ")",
            top: "calc(" + fiftyprcnt + " - " + bghalf + ")",
            position: "absolute"
        };

        if (action.customMessage) {
            var msgbgcolor = "transparent";
            var msgcolor = "#000000";
            var msgfontsize = "15px";
            var txtpadding = "10px";
            var txtradius = "3px";
            if (action.msgBgColor) {
                msgbgcolor = action.msgBgColor;
            }
            if (action.msgColor) {
                msgcolor = action.msgColor;
            }
            if (action.msgFontSize) {
                msgfontsize = action.msgFontSize;
            }
            if (action.txtPadding) {
                txtpadding = action.txtPadding;
            }
            if (action.txtRadius) {
                txtradius = action.txtRadius;
            }

            var messageCss = {
                position: "absolute",
                zIndex: 9999999,
                left: "0px",
                top: "calc(" + fourtyfiveprcnt + " - " + bghalf + ")",
                width: "100%",
                textAlign: "center"
            };

            var fontCss = {
                fontSize: msgfontsize,
                color: msgcolor,
                background: msgbgcolor,
                borderRadius: txtradius,
                padding: txtpadding
            };

            var message = "Please wait...";

            if (action.message) {
                message = action.message;
            }

            // Create the required mask
            mask = $(
                '<div class="overlay-mask"><div class="childbox"></div><div class="custome-loader-message"><span>' +
                message +
                "</span></div></div>"
            );

            if (insertafterme) {
                this.after(mask);
            } else {
                mask.appendTo(this);
            }

            $(".custome-loader-message").css(messageCss);
            $(".custome-loader-message span").css(fontCss);
        } else {
            mask = $(
                '<div class="overlay-mask"><div class="childbox"></div></div>'
            );

            if (insertafterme) {
                this.after(mask);
            } else {
                mask.appendTo(this);
            }
        }

        mask.css(maskCss);
        $(".childbox").css(childCss);

        // Act based on params if show then show loader div
        mask.show();
    }
    return this;
};

/*
 * Code for Global Loader goes here - ends
 */

/*
 * Code for scripts Loader goes here - starts
 */
var load = (function () {
    // Function which returns a function: https://davidwalsh.name/javascript-functions
    function _load(tag) {
        return function (url) {
            // This promise will be used by Promise.all to determine success or failure
            return new Promise(function (resolve, reject) {
                var element = document.createElement(tag);
                var parent = "body";
                var attr = "src";

                // Important success and error for the promise
                element.onload = function () {
                    resolve(url);
                };
                element.onerror = function () {
                    reject(url);
                };

                // Need to set different attributes depending on tag type
                switch (tag) {
                    case "script":
                        element.async = false;
                        element.type = "text/javascript";
                        break;
                    case "link":
                        element.type = "text/css";
                        element.rel = "stylesheet";
                        attr = "href";
                        parent = "head";
                }

                // Inject into document to kick off loading
                element[attr] = url;
                document[parent].appendChild(element);
            });
        };
    }
    return {
        css: _load("link"),
        js: _load("script"),
        img: _load("img")
    };
})();
/*
 * Code for scripts Loader goes here - ends
 */

var loaderParams = {
    do: "show",
    insertafterme: true,
    displayme: false,
    customMessage: true,
    msgFontSize: "15px",
    txtRadius: "3px",
    txtPadding: "10px",
    bgc: "rgba(0, 0, 0, 0.7)",
    msgBgColor: "lightgreen"
};

$("#bodyContainer").overlayMask(loaderParams);

$(window).on("load", function () {
    // makes sure the whole site is loaded
    $("#bodyContainer").overlayMask({
        do: "hide",
        insertafterme: true,
        fadeOut: true
    });
});
