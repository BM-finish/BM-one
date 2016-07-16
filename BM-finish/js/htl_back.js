// 《今日优惠》《评论》页面
$(function() {
    $('.htl-fav-a').tap(function() {
        history.go(-1);
    })
    $('.cyr-top-return').tap(function() {
        history.go(-1);
    })
    $('.htl-assistant-a').tap(function() {
        history.go(-1);
    })
    $('.htl-attend-a').tap(function() {
        history.go(-1);
    })
     $('cyr-top-return').tap(function() {
        history.go(-1);
    })
})

//社区活动页面
$(".zfx-participate").tap(function() {
    $(this).siblings('.zfx-people').css({
        "display" : "block"
    })
})
$(".zfx-people strong").tap(function() {
    $(this).parent().css({
        "display" : "none"
    })
})
var zfxIcon = true;
$(".zfx-icon strong").tap(function() {
    if (zfxIcon) {
        $(this).css({
            background: "url('../images/loves.png') 0 50% no-repeat",
            backgroundSize: "0.88rem 0.75rem"
        }).html(990);
        zfxIcon = false;
    } else {
        $(this).css({
            background: "url('../images/love.png') 0 50% no-repeat",
            backgroundSize: "0.88rem 0.75rem"
        }).html(989);
        zfxIcon = true;
    };
})