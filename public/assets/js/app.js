function resetFp(window, zoom) {
    if ($(".news").length > 0) {
        $(".body-container").show();
        return;
    }
    $(".body-container").hide();
    if ($(window).width() >= 770) {
        if (zoom != null) {
            zoom.elevateZoom({ zoomType   : "inner", cursor: "crosshair" });
        }        
    }
    if ($(window).height() < 600 || $(window).width() < 770) {
        $(".body-container").show();
        return;
    }
    bodyHeight = $(window).height() - 120 - 45;
    bodyWidth = bodyHeight;
    if (bodyWidth > 650) bodyWidth = 650;
    if ($(window).width() > 640) {
        $(".gallery .body-container .gallery-frame").css({'width': bodyHeight, 'height': bodyHeight});
    }
    $(".body-container").css({'height': bodyHeight});   
    $(".body-container").show();

}

$(document).ready(function(){

});


$(window).load(function () {
    $('[data-toggle="tooltip"]').tooltip(); 
    $("img.lazy").lazyload({
             effect: "fadeIn",
             effectspeed: 2000
           });
    var zoom = $(".gallery-frame .active img");
    resetFp(window, zoom); 
    $('.main-container').fadeIn(1000);

    var container = $(".my-track");
    var track = container.find(".slider-container").silverTrack({
        duration: 200,
        easing: "easeInOutQuad",
        mode: "vertical",
        animationAxis: "y",
        perPage: 1
    });
    track.install(new SilverTrack.Plugins.Navigator({
      prev: $("a.prev", container),
      next: $("a.next", container)
    }));

    track.start();
    $(window).resize();
    $("a.next, a.prev").on('click', function() {
        // remove only the "zoom" elevateZoom
        zoom.data().elevateZoom.zoomContainer.remove(); //remove specific .zoomContainer
        $.removeData(zoom, 'elevateZoom'); //remove data from img
        button = $(this);
        button.addClass('unclickable');
        galleryFrame = $(".body-container .gallery-frame");
        galleryFrameActive = galleryFrame.children('.active');
        galleryFrame.children('.item').removeClass('active');

        sliderContainer = $(".slider-container");
        sliderContainerPos = sliderContainer.position();
        sliderContainerActive = sliderContainer.children(".active");
        sliderContainer.children('.item').removeClass('active');
        sliderContainer.children('.item').find('img').addClass('desaturate');

        if (button.hasClass('next')) {
            galleryNext = galleryFrameActive.next();
            sliderNext = sliderContainerActive.next();
        } else {
            sliderNext = sliderContainerActive.prev();
            galleryNext = galleryFrameActive.prev();
        }
        galleryNext.addClass('active');
        sliderNext.addClass('active');
        sliderNext.find('img').removeClass('desaturate');
        setTimeout(function() {
            if (button.hasClass('next') && !galleryNext.is(':last-child')) {
                $("a.prev").removeClass('unclickable'); 
                button.removeClass('unclickable');                
            }
            if (button.hasClass('prev') && !galleryNext.is(':first-child')) {
                $("a.next").removeClass('unclickable'); 
                button.removeClass('unclickable');                
            } 
        }, 200)
        zoom = $(".gallery-frame .active img");
        zoom.elevateZoom({ zoomType   : "inner", cursor: "-webkit-zoom-in" });
        $(window).resize();
    });

    $(window).on('resize', function(){
        resetFp(window);
    });

});

