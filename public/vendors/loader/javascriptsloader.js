/*
 * Code for Global Loader goes here - starts
 */

$.fn.overlayMask = function (action) {
    // if no input data parameters
    if (undefined == action) {
        let error = "No parameters passed to OverlayMask loader at: ";
        console.log(error, this);
        return false;
    }

    // Adding a overlayMask class
    let insertafterme = false;
    if (action.insertafterme) {
        insertafterme = action.insertafterme;
    }

    let mask = this.children(".overlay-mask");
    if (insertafterme) {
        mask = this.next(".overlay-mask");
    }

    let bgsize = 75; // background size is 75px by default
    let bghalf = bgsize / 2 + "px";
    let fiftyprcnt = "50%";
    let fourtyfiveprcnt = "45%";
    let minSize = 85; // minimum size will be always 85px by default which +10 of bgsize bcz parent div should be more than background image

    // Defaults
    let pPos = "initial";
    let pOverflow = "hidden";
    let bgc = "rgba(0, 0, 0, 0.50)";
    let bgsizePx = bgsize + "px";
    let minSizePx = minSize + "px";
    let pos = "absolute";
    let bgimg = base_url + "/vendors/loader/bars.svg"; //'loader.gif';
    let zIndex = 2000;
    let displayParent = "visible";
    let hideparent = false;
    let pHeight = $(window).height();
    let parentDivMinHeight = false;
    let customPadding = 0;

    if (mask.length && action.do === "hideLoader") {
        if (action.fadeOut) {
            mask.fadeOut(action.fadeOut);
            mask.remove();
        } else {
            // Act based on params, if hide then remove loader div
            mask.remove();
        }

        this.removeStyle('position');
        this.removeStyle('overflow');
        this.removeStyle('visibility');
        this.removeStyle('height');

    } else if (!mask.length && action.do === "showLoader") {
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

        if (action.hideparent) {
            hideparent = action.hideparent;
        }

        if (hideparent) {
            displayParent = "hidden";
        }

        if (action.parentDivMinHeight) {
            parentDivMinHeight = action.parentDivMinHeight;
        }

        if (action.customPadding) {
            customPadding = action.customPadding;
        }

        var parentCss = {
            position: pPos,
            overflow: pOverflow,
            visibility: displayParent
        };

        if (pPos !== "relative" || parentDivMinHeight) {
            parentCss.height = pHeight;
        }

        this.css(parentCss);

        let maskCss = {
            position: pos,
            width: "100%",
            height: "100%",
            top: "0px",
            left: "0px",
            zIndex: zIndex,
            backgroundColor: bgc,
            minHeight: minSizePx,
            padding: customPadding
        };

        let childCss = {
            backgroundImage: "url(" + bgimg + ")",
            backgroundSize: bgsizePx,
            width: bgsizePx,
            height: bgsizePx,
            left: "calc(" + fiftyprcnt + " - " + bghalf + ")",
            top: "calc(" + fiftyprcnt + " - " + bghalf + ")",
            position: "absolute"
        };

        if (action.customMessage) {
            let msgbgcolor = "transparent";
            let msgcolor = "#000000";
            let msgfontsize = "15px";
            let txtpadding = "10px";
            let txtradius = "3px";
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

            let messageCss = {
                position: "absolute",
                zIndex: 9999999,
                left: "0px",
                top: "calc(" + fourtyfiveprcnt + " - " + bghalf + ")",
                width: "100%",
                textAlign: "center"
            };

            let fontCss = {
                fontSize: msgfontsize,
                color: msgcolor,
                background: msgbgcolor,
                borderRadius: txtradius,
                padding: txtpadding
            };

            let message = "Please wait...";

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
 * Code for remove a style - starts
 */
(function ($) {
    $.fn.removeStyle = function (style) {
        var search = new RegExp(style + '[^;]+;?', 'g');

        return this.each(function () {
            $(this).attr('style', function (i, style) {
                return style.replace(search, '');
            });
        });
    };
}(jQuery));
/*
 * Code for remove a style - ends
 */

/*
 * Code for scripts Loader goes here - starts
 */
const load = (function () {
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
    do: "showLoader",
    insertafterme: true,
    hideparent: true,
    customMessage: true,
    msgFontSize: "15px",
    txtRadius: "3px",
    txtPadding: "10px",
    bgc: "rgba(0, 0, 0, 0.7)",
    msgBgColor: "lightgreen",
    parentDivMinHeight: true
};

$("#bodyContainer").overlayMask(loaderParams);

$(window).on("load", function () {

    // makes sure the whole site is loaded
    $("#bodyContainer").overlayMask({
        do: "hideLoader",
        insertafterme: true,
        fadeOut: true
    });
});

// All Globally usable functions should go here in this file
// Globally usable functions

const objecttoQuery = function (obj) {
    return Object.keys(obj).reduce(function (a, k) {
        a.push(k + '=' + encodeURIComponent(obj[k]));
        return a;
    }, []).join('&');
};

const querytoObject = function (query) {
    var params = {},
        e;

    query = query.substring(query.indexOf('?') + 1);

    if (query !== '') {
        var re = /([^&=]+)=?([^&]*)/g;
        var decodeRE = /\+/g;

        var decode = function (str) {
            return decodeURIComponent(str.replace(decodeRE, " "));
        };

        var doE = function (query) {
            e = re.exec(query);
            return e;
        };

        while (doE(query)) {
            var k = decode(e[1]),
                v = decode(e[2]);
            if (k.substring(k.length - 2) === '[]') {
                k = k.substring(0, k.length - 2);
                (params[k] || (params[k] = [])).push(v);
            } else params[k] = v;
        }

        var assign = function (obj, keyPath, value) {
            var lastKeyIndex = keyPath.length - 1;
            for (var i = 0; i < lastKeyIndex; ++i) {
                var key = keyPath[i];
                if (!(key in obj))
                    obj[key] = {};
                obj = obj[key];
            }
            obj[keyPath[lastKeyIndex]] = value;
        };

        var loopItHere = function (item, i, levels) {
            let key = item.replace(/[?[\]\\ ]/g, '');
            levels.push(key);
        };

        for (let prop in params) {
            let structure = prop.split('[');
            if (structure.length > 1) {
                let levels = [];
                structure.forEach(loopItHere(item, i, levels));
                assign(params, levels, params[prop]);
                delete(params[prop]);
            }
        }
    }
    return params;
};

const changeUrl = function (url) {
    var new_url = base_url + url;
    window.history.pushState("data", "Title", new_url);
    // document.title = url;
};

const findGetParameter = function (parameterName) {
    var result = null,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
            tmp = item.split("=");
            if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });
    return result;
};

/*
 * This function removes empty sting keys
 * it won't remove nested keys
 */
const removeEmptyStrings = (obj) => {
    let newObj = {};
    Object.keys(obj).forEach((prop) => {
        if (obj[prop] !== '') {
            newObj[prop] = obj[prop];
        }
    });
    return newObj;
};
