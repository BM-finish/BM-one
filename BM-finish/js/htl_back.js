// 《今日优惠》《评论》页面
$(function() {
    $('.htl-fav-a', '.cyr-top-return', '.htl-assistant-a', '.cyr-top-return').tap(function() {
        history.go(-1);
    })
