idleTimer = null;
idleState = false;
idleWait = 10000;

$(window).load(function () {
    
    function resetFp() {
        $('body').hide();
        width = $(window).width();
        height = $(window).height();
        centerX =  parseInt($(window).width()/2);
        centerY =  parseInt($(window).height()/2);
        if (height > width) {
            imgHeight = parseInt(width*0.95);
            marginTop = parseInt((height - imgHeight)/2);
        } else {
            imgHeight = parseInt(centerY*1.5);
            marginTop = parseInt(centerY*0.25);
        }
        // alert(height);
        $('.fp_sq_container p img').css({'height': imgHeight, 'width': imgHeight, 'margin-top':marginTop});
        $('body').fadeIn(1000);
    }

    resetFp();

    $(window).on('resize', function(){
        resetFp(window);
    });

});