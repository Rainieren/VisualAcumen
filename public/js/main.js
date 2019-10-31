$(document).ready(function() {

    var sidebar = $('#dashboard-sidebar');
    var content = $('#content-container');
    var sidebar_main_content = $('.dashboard-main');
    var block_overlay = $('.block-overlay');

    $('#dashboard-sidebar-toggle').on('click', function() {
        sidebar.toggleClass('dashboard-sidebar-active');
        content.toggleClass('content-container-active');
    });

    $('.slideout').on('click', function() {
        if($(this).data('slideout-block')) {
            var slideout_item = $('.slideout-block-' + $(this).data('slideout-block'));
            slideout_item.animate({width: "toggle"}, 300);
            block_overlay.fadeIn();
        } else if($(this).data('slideout-item')){
            var slideout_item = $('.dashboard-' + $(this).data('slideout-item'));
            sidebar_main_content.toggle("slide", 250);
            slideout_item.toggle("slide", { direction: "right" }, 250);
        }
    });

    $('.slidein').on('click', function () {
        if($(this).data('slidein-block')) {
            var slidein_item = $('.slidein-block-' + $(this).data('slidein-block'));
            slidein_item.animate({width: "toggle"}, 300);
            block_overlay.fadeOut();

        } else if($(this).data('slidein-item')) {
            var slidein_item = $('.dashboard-' + $(this).data('slidein-item'));
            sidebar_main_content.toggle("slide", 250);
            slidein_item.toggle("slide", { direction: "right" }, 250);
        }
    });

    $('#slide-next').on('click', function() {
        $('.register-form-user').toggle("slide", { direction: "left" }, 250);
        $('.register-form-company').toggle("slide", { direction: "right" }, 250);
    });

    $('#slide-prev').on('click', function () {
        $('.register-form-user').toggle("slide", { direction: "left" }, 250);
        $('.register-form-company').toggle("slide", { direction: "right" }, 250);
    });
});

