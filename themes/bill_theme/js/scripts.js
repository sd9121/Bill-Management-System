(function($) {
    $(document).ready(function() {
        $(window).resize(function() {
            if ($(window).width() >= '768') {
                $('.menu--main .menu').removeClass('width-250');
                $('.sub-menu').removeClass('sub-list');
            }
            if ($(window).width() < '768') {
                $('.sub-menu').addClass('sub-list');
            }
        });
        $('.menu-item--expanded').hover(function() {
            if ($(window).width() < '768') {
                $('.sub-menu').addClass('sub-list');
            }
        });
        $('.menu-item--expanded').hover(function() {
            if ($(window).width() > '767') {
                $('.sub-menu').removeClass('sub-list');
            }
        });
        $('.menu--main').click(function() {
            $('.menu', this).toggleClass('width-250');
        });
    });
})(jQuery);
