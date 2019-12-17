    var scroll;
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".navblack").css({"background-color":"rgba(3, 155, 229)"});
            $(".navblack").css({"background-color":"rgba(3, 155, 229)"});
            $('.navblack').removeClass("z-depth-0");
            $('.navblack').addClass("z-depth-12");
        }else{
            $(".navblack").css({"background-color":"transparent"});
            $('.navblack').removeClass("z-depth-12");
            $('.navblack').addClass("z-depth-0");
        }
    });