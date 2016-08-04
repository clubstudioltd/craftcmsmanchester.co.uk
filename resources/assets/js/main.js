$(document).ready(function () {

    // -------------------------------------------------------------------------
    // Normalize card heights
    // -------------------------------------------------------------------------

    var Heights = {
        equalize: function (elemClass) {
            var tallestElem = 0;

            $(elemClass).each(function () {
                var elemHeight = $(this).height();
                if (tallestElem < elemHeight) {
                    tallestElem = elemHeight;
                }
            });

            $(elemClass).height(tallestElem + 'px');
        }
    }

    Heights.equalize('.meetup-preview');

    $(window).resize(function () {
        var cardClass = '.meetup-preview';

        $(cardClass).css('height', '');
        Heights.equalize(cardClass);
    });

    // -------------------------------------------------------------------------
    // Smooth Scrolling
    // -------------------------------------------------------------------------

    $('a[href^="#"]').on('click', function (e) {
        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1200, 'swing', function () {
            window.location.hash = target;
        });

        e.preventDefault();
    });

});
