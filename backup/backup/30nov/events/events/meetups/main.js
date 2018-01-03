$(document).ready(function() {
    var $gallery = $('.gallery');
    var $gallery1 = $('.gallery1');
    var $gallery2 = $('.gallery2');


    $gallery.vitGallery({
        debag: true,
        thumbnailMargin: 5,
        fullscreen: true
    })

    $gallery1.vitGallery({
        controls: 'points',
        transition: 'crossfade',
        autoplay: false,
        fullscreen: true
    })

    $gallery2.vitGallery({
        controls: 'points',
        transition: 'slide-blur',
        autoplay: false,
        fullscreen: true,
        thumnailAnimationSpeed: 500,
        animateSpeed: 500,
    })
    var carousel = $("#carousel").waterwheelCarousel({
        flankingItems: 3,
        movingToCenter: function($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
        },
        movedToCenter: function($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
        },
        movingFromCenter: function($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
        },
        movedFromCenter: function($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
        },
        clickedCenter: function($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
        }
    });

    $('#prev').bind('click', function() {
        carousel.prev();
        return false
    });

    $('#next').bind('click', function() {
        carousel.next();
        return false;
    });

    $('#reload').bind('click', function() {
        newOptions = eval("(" + $('#newoptions').val() + ")");
        carousel.reload(newOptions);
        return false;
    });

})