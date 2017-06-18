/**
 * Select2 Russian translation
 */

// не работает, оставлено чтобы 404 не получать от прежних страниц

/* (function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Совпадений не найдено"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Пожалуйста, введите еще " + n + " символ" + (n == 1 ? "" : ((n > 1)&&(n < 5) ? "а" : "ов")); },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Пожалуйста, введите на " + n + " символ" + (n == 1 ? "" : ((n > 1)&&(n < 5)? "а" : "ов")) + " меньше"; },
        formatSelectionTooBig: function (limit) { return "Вы можете выбрать не более " + limit + " элемент" + (limit == 1 ? "а" : "ов"); },
        formatLoadMore: function (pageNumber) { return "Загрузка данных..."; },
        formatSearching: function () { return "Поиск..."; }
    });
})(jQuery); */

// ха-ха, а вот так работает, если прямо из папки i18n копипаст нужного языка сделать
(function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;return e.define("select2/i18n/ru",[],function(){function e(e,t,n,r){return e%10<5&&e%10>0&&e%100<5||e%100>20?e%10>1?n:t:r}return{errorLoading:function(){return"Невозможно загрузить результаты"},inputTooLong:function(t){var n=t.input.length-t.maximum,r="Пожалуйста, введите на "+n+" символ";return r+=e(n,"","a","ов"),r+=" меньше",r},inputTooShort:function(t){var n=t.minimum-t.input.length,r="Пожалуйста, введите еще хотя бы "+n+" символ";return r+=e(n,"","a","ов"),r},loadingMore:function(){return"Загрузка данных…"},maximumSelected:function(t){var n="Вы можете выбрать не более "+t.maximum+" элемент";return n+=e(t.maximum,"","a","ов"),n},noResults:function(){return"Совпадений не найдено"},searching:function(){return"Поиск…"}}}),{define:e.define,require:e.require}})();
