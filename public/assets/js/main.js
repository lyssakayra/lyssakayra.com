idleTimer = null;
idleState = false;
idleWait = 10000;

$(window).load(function () {

    $('*').bind('mousemove keydown scroll', function () {
        
        clearTimeout(idleTimer);

        if (idleState == true) { 
            // Reactivated event
            resetFp();          
        }
        
        idleState = false;
        
        idleTimer = setTimeout(function () {
            idleState = true; 
            if ($(".active").length == 0) {
                // Idle Event
                showMenuItems();               
            }
        }, idleWait);
    });
    
    $("body").trigger("mousemove");

    function resetFp() {
        $('.fp_sq_2').fadeOut();

        width = $(window).width();
        height = $(window).height();
        centerX =  parseInt($(window).width()/2);
        centerY =  parseInt($(window).height()/2);
        if (height > width) {
            imgHeight = parseInt(centerX*0.95);
            marginTop = centerY - imgHeight;
        } else {
            imgHeight = parseInt(centerY*0.90);
            marginTop = parseInt(centerY*0.10);
        }



        $(".fp_sq_gallery_1").css({
            'position': 'absolute',
            'height': imgHeight,
            'width': imgHeight,
            'top': marginTop+1,
            'left': centerX - imgHeight,
        });
        $(".fp_sq_gallery_1").show();

        $(".fp_sq_about_1").css({
            'position': 'absolute',
            'height': imgHeight,
            'width': imgHeight,
            'top': marginTop+1,
            'left': centerX,
        });
        $(".fp_sq_about_1").show();

        $(".fp_sq_news_1").css({
            'position': 'absolute',
            'height': imgHeight,
            'width': imgHeight,
            'top': centerY,
            'left': centerX - imgHeight,
        });
        $(".fp_sq_news_1").show();

        $(".fp_sq_contact_1").css({
            'position': 'absolute',
            'height': imgHeight,
            'width': imgHeight,
            'top': centerY,
            'left': centerX,
        });
        $(".fp_sq_contact_1").show();
        
        $('body').fadeIn(1000);
    }

    function inOutAnim(element) {
        $(element).next().css({
            'position':'absolute',
            'top': $(element).offset().top,
            'left': $(element).offset().left,
            'height': $(element).height(),
            'width': $(element).width()
        });
        $(element).next().fadeIn(1000);
        setTimeout(function() {
            $(element).next().fadeOut(2000);
        }, 1000);
    }

    function showMenuItems() {
        inOutAnim(".fp_sq_gallery_1");
        setTimeout(function() {
            inOutAnim(".fp_sq_about_1");
            setTimeout(function() {
                inOutAnim(".fp_sq_contact_1");
                setTimeout(function() {
                    inOutAnim(".fp_sq_news_1");
                }, 1000);
            }, 1000);
        }, 1000);
    }

    // 
    resetFp();

    $(window).on('resize', function(){
        $(".fp_sq_container").children().each(function(){$(this).hide()});
        resetFp(window);
    });

    
    $(".fp_sq_1").mouseenter(function() {
        $(this).addClass('active');
        $(this).next().css({
            'position':'absolute',
            'top': $(this).offset().top,
            'left': $(this).offset().left,
            'height': $(this).height(),
            'width': $(this).width()
        });
        $(this).next().fadeIn();
      }
    );
    $(".fp_sq_2").mouseleave(function() {
        $(this).prev().removeClass('active');
        $(this).fadeOut(500);
      }
    );
});