var getAllParams = function (pageType) {
    let listParams = {};
    switch (pageType) {
        case "venues":
            listParams.element = "#nav-venues";
            listParams.url = "/venues";
            listParams.is_express_deal = 0;
            break;
        case "events":
            listParams.element = "#nav-events";
            listParams.url = "/events/organisers";
            listParams.is_express_deal = 0;
            break;
        case "suppliers":
            listParams.element = "#nav-suppliers";
            listParams.url = "/suppliers";
            listParams.is_express_deal = 0;
            break;
        case "package-ex-events":
            listParams.element = "#express-eventorgs";
            listParams.url = "/packages/eventorganisers";
            listParams.is_express_deal = 1;
            break;
        case "package-ex-suppliers":
            listParams.element = "#express-suppliers";
            listParams.url = "/packages/suppliers";
            listParams.is_express_deal = 1;
            break;
        case "package-events":
            listParams.element = "#nav-package-eveorgs";
            listParams.url = "/packages/eventorganisers";
            listParams.is_express_deal = 0;
            break;
        case "package-suppliers":
            listParams.element = "#nav-package-suppliers";
            listParams.url = "/packages/suppliers";
            listParams.is_express_deal = 0;
            break;
        case "upcoming-events":
            listParams.element = "#upcomingListingPage";
            listParams.url = "/events/upcoming";
            listParams.is_express_deal = 0;
            break;
        case "express-venues":
            listParams.element = "#express-venues";
            listParams.url = "/venues";
            listParams.is_express_deal = 1;
            break;
        case "express-events":
            listParams.element = "#express-events";
            listParams.url = "/events/organisers";
            listParams.is_express_deal = 1;
            break;
        case "express-suppliers":
            listParams.element = "#express-suppliers";
            listParams.url = "/suppliers";
            listParams.is_express_deal = 1;
            break;
        default:
            listParams.element = "#nav-venues";
            listParams.url = "/venues";
            listParams.is_express_deal = 0;
    }

    return listParams;
};

var getLists = function (filtersData, jsData) {
    let data = filtersData;
    let params = {
        type: "ajaxRender",
        url: jsData.url,
        element: jsData.element,
        method: "GET",
        overlayMask: true,
        data: data
    };
    ajaxHtmlRender(params);
};

var getTypeListItems = function (pageType) {

    let listParams = getAllParams(pageType);

    let filtersData = {
        pageType: pageType,
        is_express_deal: listParams.is_express_deal
    };

    let jsData = {
        url: listParams.url,
        element: listParams.element
    };

    $('#cityDateForm input[name=pageType]').val(pageType);

    getLists(filtersData, jsData);
};

var pagiNator = function (pageType, pageNumber) {

    let listParams = getAllParams(pageType);

    let formFilters = $("#" + pageType + "-form").serialize();

    let filtersData = querytoObject(formFilters);

    filtersData.page = pageNumber;
    filtersData.pageType = pageType;
    filtersData.is_express_deal = listParams.is_express_deal;

    let jsData = {
        url: listParams.url,
        element: listParams.element
    };

    getLists(filtersData, jsData);
};

var filterItNow = function (formId, pageType) {

    let form = $("#" + formId);

    let formData = form.serialize();

    let filtersData = querytoObject(formData);

    let listParams = getAllParams(pageType);

    filtersData.pageType = pageType;
    filtersData.is_express_deal = listParams.is_express_deal;

    let jsData = {
        url: listParams.url,
        element: listParams.element
    };

    getLists(filtersData, jsData);
};

var filterByCityDate = function (formData, pageType) {

    let filtersData = querytoObject(formData);

    let listParams = getAllParams(pageType);

    filtersData.pageType = pageType;
    filtersData.is_express_deal = listParams.is_express_deal;

    let jsData = {
        url: listParams.url,
        element: listParams.element
    };

    getLists(filtersData, jsData);
};

var resetForm = function (pageType) {
    // this will get the results without any filters, with default parameters
    let listParams = getAllParams(pageType);
    let filtersData = {};
    filtersData.pageType = pageType;
    filtersData.is_express_deal = listParams.is_express_deal;

    let jsData = {
        url: listParams.url,
        element: listParams.element
    };

    getLists(filtersData, jsData);
};
