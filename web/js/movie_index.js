$(function() {
    "use strict";

    var movies_container = $('#movies_container');

    movies_container.isotope({
        // options
        itemSelector : '.movie',
        layoutMode : 'fitRows'
    });

    $('.alphabet').find('a').on('click', function(e) {
        var that = $(this);
        var selector = that.attr('data-filter');
        movies_container.isotope({ filter: selector });
        activateFilterPill(that.closest('li'));
        e.preventDefault();
    });

    function activateFilterPill($elem) {
        var alphaPills = $('.alphabet').find('li');
        alphaPills.removeClass('active');
        $elem.addClass('active');
    }
});
