$(document).ready(function () {
    let params = {
        type: "ajaxRender",
        url: "/venues",
        element: "#nav-venues",
        method: "GET",
        overlayMask: true,
        data: null
    };
    ajaxHtmlRender(params);
    $("#nav-events-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/eventsorganisers",
            element: "#nav-events",
            method: "GET",
            overlayMask: true,
            data: null
        };
        ajaxHtmlRender(params);

    });

    $("#nav-suppliers-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/suppliers",
            element: "#nav-suppliers",
            method: "GET",
            overlayMask: true,
            data: null
        };
        ajaxHtmlRender(params);

    });

    $("#nav-package-suppliers-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/packages/suppliers",
            element: "#nav-package-suppliers",
            method: "GET",
            overlayMask: true,
            data: null
        };
        ajaxHtmlRender(params);

    });

    $("#nav-package-eveorgs-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/packages/eventorganisers",
            element: "#nav-package-eveorgs",
            method: "GET",
            overlayMask: true,
            data: null
        };
        ajaxHtmlRender(params);

    });

    $("#nav-express-deals-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/packages/eventorganisers",
            element: "#express-eventorgs",
            method: "GET",
            overlayMask: true,
            data: {
                is_express_deal: 1
            }
        };
        ajaxHtmlRender(params);

    });

    $("#express-suppliers-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/packages/suppliers",
            element: "#express-suppliers",
            method: "GET",
            overlayMask: true,
            data: {
                is_express_deal: 1
            }
        };
        ajaxHtmlRender(params);

    });

    $("#nav-packages-tab").on("click", function () {
        $("#nav-express-deals-tab").trigger("click");
    });

});
