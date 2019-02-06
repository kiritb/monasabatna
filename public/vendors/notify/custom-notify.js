function notifier(parameters) {
    parameters = (parameters) ? parameters : '';
    let icon = (parameters.icon) ? parameters.icon : '';
    let title = (parameters.title) ? parameters.title : 'Notifier';
    let message = (parameters.message) ? parameters.message : 'Something went wrong!!';
    let autoHide = (parameters.autoHide) ? parameters.autoHide : false;
    let delay = (autoHide) ? (parameters.delay ? parameters.delay : 5000) : 0;
    let type = (parameters.type) ? parameters.type : 'notification';

    let typeClass;
    switch (type) {
        case 'info':
            typeClass = 'alert-info';
            icon = '<i class="fa fa-info-circle" aria-hidden="true"></i>';
            break;

        case 'warning':
            typeClass = 'alert-warning';
            icon = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
            break;

        case 'danger':
            typeClass = 'alert-danger';
            icon = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>';
            break;

        default:
            typeClass = 'alert-success';
            icon = '<i class="fas fa-check" aria-hidden="true"></i>';
            break;
    }

    let classes = (parameters.classes) ? parameters.classes : 'custom-vm';
    $.notify.addStyle('master', {
        html: '<div>' +
            '<div class="alert ' + typeClass + '">' +
            '<div class="text-center">' + icon + '</div>' +
            '<div class="notify-content"><h5>' + title + '</h5>' +
            '<div class="master-ct">' + message + '</div></div>' +
            '</div>' +
            '</div>'
    });

    $.notify(message, {
        // whether to hide the notification on click
        clickToHide: true,
        // whether to auto-hide the notification
        autoHide: autoHide,
        // if autoHide, hide after milliseconds
        autoHideDelay: delay,
        // default positions
        globalPosition: 'top right',
        // default style
        style: 'master',
        // default class (string or [string])
        className: classes,
        // show animation
        showAnimation: 'slideDown',
        // show animation duration
        showDuration: 400,
        // hide animation
        hideAnimation: 'slideUp',
        // hide animation duration
        hideDuration: 200
    });
}

function notifyError(message) {
    var params = {
        title: "Error!",
        message: message,
        type: "danger",
        autoHide: true,
        delay: 10000
    };
    notifier(params);
}

function notifyWarning(message) {
    var params = {
        title: "Warning!",
        message: message,
        type: "warning",
        autoHide: true,
        delay: 10000
    };
    notifier(params);
}

function notifyInfo(message) {
    var params = {
        title: "Information!",
        message: message,
        type: "info",
        autoHide: true,
        delay: 10000
    };
    notifier(params);
}

function notifySuccess(message) {
    var params = {
        title: "Suceess!",
        message: message,
        type: "success",
        autoHide: true,
        delay: 10000
    };
    notifier(params);
}
