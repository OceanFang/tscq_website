$(function() {
	//$('body').append('<div class="fuchuang" style="display:block"><img src="//tscq.ixinyou.com/images/fc-180921.png" alt="浮窗" /></div>'); 
	//$('header .main').append('<div class="start-time1">11月17日 火爆开启</div>'); 
    
    $('.career-info').liteAccordion({
            containerWidth : 1100,                   // fixed (px) 
            containerHeight : 600,                  // fixed (px) 
            headerWidth: 139,
            firstSlide: 1,
            easing: "easeOutBounce",
            activateOn: "mouseover"
        });
    
    // 播放视频
    function video (v) {
        var video = "https://www.youtube.com/embed/" + v;
        $(".pop-in iframe").attr("src",video);
    }
    // media
        // 头部视频
        $('.head-video-btn').click(function () {
            $(".popbg, .pop").show();
           video('ypAuNqS0Jqo');
        });
        $('.career-mov').click(function () {
            $(".popbg, .pop").show();
            if($(this).hasClass("mov01")){
                video('-cZAwXD1IwE');
            }
            else if($(this).hasClass("mov02")){
                video('O6IJ7SiRUfw');
            }
            else if($(this).hasClass("mov03")){
                video('rdUY_RudtJM');
            }
            else if($(this).hasClass("mov04")){
                video('UCUbzOToNbE');
            }
            else if($(this).hasClass("mov05")){
                video('LQ9rVsc-qQM');
            }
            return(false);
        });
        $('.video-close').click(function () {
                $(".popbg, .pop").hide();
                $(".pop-in iframe").each(function(index) {
                    $(this).attr('src', $(this).attr('src'));
                    return false;
                });
                return(false);
            });
        var regBtn = $('.pop-rs-nav span');
            regBtn.click(function () {
                var regIndex = $(this).index();
                var regWrap = $(this).parent().next().find('.pop-rs-item');
                $(this).addClass('active').siblings().removeClass('active');
                regWrap.eq(regIndex).addClass('active').siblings().removeClass('active');
            });
            // 点击弹窗事件
            $('.welfare-item').click(function () {
                if($(this).index()==0){
                    $(".popbg, .pop-evt#pop-evt1").show();
                }
                else if($(this).index()==1){
                    $(".popbg, .pop-evt#pop-evt2").show();
                }
            });
            $('.pop-evt-close').click(function () {
                $(".popbg, .pop-evt").hide();
                return(false);
            });

        // media new 新闻切换
            var navBtn = $('.news-nav ul li');
            var navWrap = $('.news-item-wrap');
            navBtn.click(function () {
                var navIndex = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                navWrap.eq(navIndex).addClass('active').siblings().removeClass('active');
            });
});
$(function(){
    $(".topbtn").click(function(){
        $("html, body").animate({scrollTop:0},500);
    });
    $(window).scroll(function() {        
        if ($(this).scrollTop() > 2750){
            $(".media-footer").removeClass("float-on");
            $(".media-footer").addClass("float-off");
        } else {
            $(".media-footer").removeClass("float-off");
            $(".media-footer").addClass("float-on");
        };
        
        if ($(this).scrollTop() > 400){
            $(".topbtn").fadeIn("fast");
        } else {
            $(".topbtn").stop().fadeOut("fast");
        };
    });

});