function resetFp(window) {
    $(".body-container").hide();
    if ($(window).height() < 600 || $(window).width() < 740) {
        $(".body-container").show();
        return;
    }
    bodyHeight = $(window).height() - 120 - 45;
    if ($(window).width() > 640) {
        $(".gallery .body-container .gallery-frame").css({'width': bodyHeight, 'height': bodyHeight});
    }
    $(".body-container").css({'height': bodyHeight});   
    $(".body-container").show();

}
$(window).load(function () {
    resetFp(window); 

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

    $("a.next, a.prev").on('click', function() {
        button = $(this);
        galleryFrame = $(".body-container").find(".gallery-frame");
        galleryFrame.children('.item').each(function() {
            $(this).removeClass('active');
        });
        sliderContainer = container.find(".slider-container");
        sliderContainerPos = sliderContainer.position();
        sliderContainer.children('.item').each(function(i) {
            $(this).find('img').addClass('desaturate');
            $(this).find('img').addClass('desaturate');
            itemPos = $(this).position();
            if ((-1*sliderContainerPos.top+220 == itemPos.top && button.hasClass('next'))
                ||(-1*sliderContainerPos.top == itemPos.top && button.hasClass('prev'))) {
                $(this).find('img').removeClass('desaturate');
                itemClass = $(this).attr('class').split(' ');
                itemClass = "."+$(itemClass).get(-1);
                galleryFrame.find(itemClass).addClass('active');
            }
        });
        if (-1 * sliderContainer.height() == sliderContainerPos.top - 440 && $(this).hasClass('next')) {
            $("a.next").addClass('unclickable');
        } else {
            $("a.next").removeClass('unclickable');
        }

    });

    $(window).on('resize', function(){
        resetFp(window);
    });

});
  
