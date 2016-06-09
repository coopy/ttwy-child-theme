'use strict';

jQuery(document).ready(function($) {
    // Expand-links
    var idString = 'data-expand-id'
    var idSelector = '[' + idString + ']';
    var linkSelector = '[data-expand]';
    var animationOptions = {
        duration: 120,
        easing: 'swing'
    };

    $(idSelector).hide();

    $(linkSelector).click(function (ev) {
        var $link = $(this);
        var expandId = '[' + idString + '="' +
            $link.attr('data-expand') + '"]';

        $(expandId).toggle(animationOptions);
    });
});