$(document).ready(function () {
    let params = {
        type: "ajaxRender",
        url: "/venues",
        element: "#nav-venues",
        method: "GET",
        overlayMask: true
    };
    ajaxHtmlRender(params);
    $("#nav-events-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/eventsorganisers",
            element: "#nav-events",
            method: "GET",
            overlayMask: true
        };
        ajaxHtmlRender(params);

    });

    $("#nav-suppliers-tab").on("click", function () {

        let params = {
            type: "ajaxRender",
            url: "/suppliers",
            element: "#nav-suppliers",
            method: "GET",
            overlayMask: true
        };
        ajaxHtmlRender(params);

    });
});
