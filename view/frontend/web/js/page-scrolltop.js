define([
    "jquery",
    "Safalweb_PageScrollUp/js/page.scrolltop"
], function($){
    return function (config) {
        return $.scrollUp(config);
    }
});