$(document).ready(function($){
    initClassToggle();
    initAnchorScroll();
    initHeaderScrollHiding();
    var sectionScrolls = $('[data-section-scroll]');
    sectionScrolls.each(function() {
        var el = $(this);
        var ignoreHeader = el.is('[data-scroll-ignore-header]');

        el.on('click', function(e) {
            var parentSection = el.closest('section');
            if(parentSection.length) {
                var nextSection = parentSection.nextAll('section:last');
                if(nextSection.length) {
                    var header = $('header.top-header');
                    var scrollTopVal = nextSection.offset().top;

                    if(header.length && !ignoreHeader) {
                        scrollTopVal = scrollTopVal - header.outerHeight();
                    }

                    $('html, body').animate({
                        scrollTop: scrollTopVal
                    }, 3000);
                }
            }
            e.preventDefault();
            e.stopPropagation();
        });
    });
});

function initClassToggle() {
    $(document.body).on('click', '[data-toggle="class"][data-class]', function(event) {
        var $body = $('body');
        var $trigger = $(this);
        var $target = $($trigger.data('target') ? $trigger.data('target') : $trigger.attr('href'));

        if($target.length) {
            event.preventDefault();
            $target.toggleClass($trigger.data('class'));
            $trigger.toggleClass('classed');
            $body.toggleClass('scroll-hidden');
        }
    });
}

/**
 * Smooth anchor scrolling
*/
function initAnchorScroll() {
    $('a[href*="#"]:not([data-toggle])').on('click', function(event) {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name="'+this.hash.slice(1)+'"]');
            if (target.length && !target.parents('.woocommerce-tabs').length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }
    });
}

function initHeaderScrollHiding() {
     const $header = $('.site-header');
    let lastPos = 0;
    function scrolling() {
        const windowT = $(window).scrollTop();
        if (windowT > 10) {
            $header.addClass('scrolled-nav');
        } else {
            $header.removeClass('scrolled-nav');
        }
    }
    function resize() {
        lastPos = $(window).scrollTop();
        window.removeEventListener('scroll', scrolling)
        window.addEventListener('scroll', scrolling)
    }

    resize();
    window.addEventListener(
        'resize',
        window.debounce(resize, 300)
    );
}

    

jQuery(document).ready(function(){
    jQuery('.close-btn').click(function(){
        jQuery('#myModal').toggle();
        jQuery(".modal").hide();
        jQuery('body').removeClass('modal-open')
    });
    jQuery(".member").click(function(e){
        var datavalue=jQuery(this).attr('data-target');
        var img=jQuery(this).parent().parent().parent().parent();
        jQuery(".modal-body .media-container").html(img.find('.media-container').html());
        jQuery(".modal-body .member-detail").html(img.find('.member-detail').html());
        jQuery(".modal-body .team-bio").html(img.find('.team-bio').html());
        jQuery(".modal-body .linkedin-block .icon").html(img.find('.title').html());
        jQuery('body').addClass('modal-open');
        jQuery(datavalue).show();
        e.stopPropagation()
    });
    jQuery(document).on('click',function(e){
        console.log(jQuery(e.target).closest(".modal-content").length);
        if(jQuery(e.target).closest(".modal-content").length===0&&jQuery('body').hasClass('modal-open')){
            jQuery(".modal").hide();
            jQuery('body').removeClass('modal-open');
        }})
    });