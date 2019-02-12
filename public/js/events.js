$(document).ready(function () {
    var venuesDiv = "#nav-venues";
    var suppliersDiv = "#nav-suppliers";
    var eventOrgsDiv = "#nav-events";
    var packagesDiv = "#nav-package-eveorgs";
    var packageEventOrgsDiv = "#nav-package-eveorgs";
    var expressEventOrgsDiv = "#express-eventorgs";
    var expressSuppliersDiv = "#express-suppliers";
    var upcomingEventsDiv = "#listingPage";

    var isPage = findGetParameter("pageis");

    if (isPage == 'upcoming') {
        let pageData = {
            element: upcomingEventsDiv
        };

        getLists(pageData, "/events/upcoming");
    } else {
        let pageData = {
            element: venuesDiv
        };

        getLists(pageData, "/venues");
    }


    $("#nav-events-tab").on("click", function () {
        let pageData = {
            element: eventOrgsDiv
        };
        getLists(pageData, "/eventsorganisers");
    });

    $("#nav-suppliers-tab").on("click", function () {
        let pageData = {
            element: suppliersDiv
        };
        getLists(pageData, "/suppliers");
    });

    $("#nav-package-suppliers-tab").on("click", function () {
        let pageData = {
            element: suppliersDiv
        };
        getLists(pageData, "/packages/suppliers");
    });

    $("#nav-package-eveorgs-tab").on("click", function () {
        let pageData = {
            element: packagesDiv
        };
        getLists(pageData, "/packages/eventorganisers");
    });

    $("#nav-express-deals-tab").on("click", function () {
        let pageData = {
            element: expressEventOrgsDiv
        };
        getLists(pageData, "/packages/eventorganisers");
    });

    $("#express-suppliers-tab").on("click", function () {
        let pageData = {
            element: expressSuppliersDiv
        };
        getLists(pageData, "/packages/suppliers");
    });

    $("#nav-packages-tab").on("click", function () {
        $("#nav-express-deals-tab").trigger("click");
    });

});

function pagiNator(pageType, pageNumber) {

    // Need to set different attributes depending on tag type
    switch (pageType) {
        case "venues":
            pageUrl = "/venues";
            isElement = "#nav-venues";
            break;
        case "eventorgs":
            pageUrl = "/eventorganisers";
            isElement = "#nav-events";
            break;
        case "suppliers":
            pageUrl = "/suppliers";
            isElement = "#nav-suppliers";
            break;
        default:
            pageUrl = "/venues";
            isElement = "#nav-venues";
            break;
    }

    let pageData = {
        page: pageNumber,
        element: isElement
    };

    getLists(pageData, pageUrl);
}

function getLists(pageData, pageUrl) {
    let URL = pageUrl;
    let data = pageData;
    let params = {
        type: "ajaxRender",
        url: pageUrl,
        element: pageData.element,
        method: "GET",
        overlayMask: true,
        data: data
    };
    ajaxHtmlRender(params);
}

function findGetParameter(parameterName) {
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
}
