/* 
* @Author: anchen
* @Date:   2016-07-12 15:39:08
* @Last Modified by:   anchen
* @Last Modified time: 2016-07-16 16:47:46
*/

// 选择小区切换
var cyrBindingJudge = true;
$(".cyr-xzxq-binding strong span").tap(function(event) {
    if (cyrBindingJudge) {
        $(this).css({
            backgroundImage: "url('../images-cyr/arrow_top.png')"
        }).parent().parent().siblings(".cyr-binding-address-list").show();
        cyrBindingJudge = false
    } else {
        $(this).css({
            backgroundImage: "url('../images-cyr/arrow_bottom.png')"
        }).parent().parent().siblings(".cyr-binding-address-list").show().hide();
        cyrBindingJudge = true
    };
    
})

//绑定小区点击变蓝色
$(".cyr-binding-address-list li").tap(function(event) {
    $(this).css({
        "color": "#0079ff",
        "borderColor": "#0079ff"
    }).siblings("li").css({
        "color": "#414141",
        "borderColor": "#d6d6d6"
    })
})
//新增小区点击变蓝色
$(".cyr-add-address-list li").tap(function(event) {
    $(this).css({
        "color": "#0079ff",
        "borderColor": "#0079ff"
    }).siblings("li").css({
        "color": "#414141",
        "borderColor": "#d6d6d6"
    })
})

// 意见投诉类别列表
$(".cyr-yjts-show").tap(function() {
    $(this).siblings("ul").show();
})
$(".cyr-yjts-detail ul li").tap(function() {
    $(this).parent().hide().siblings("p").html($(this).html());
})

// 我的物业点击勾选
$(".cyr-wdwy-content ul li span").tap(function() {
    $(this).html("✔").parents().siblings("li").children("span").html("");
})

//商品信息Tab切换
$(".cyr-spxx-sort-tit div").tap(function() {
    $(this).children("span").css({
        background: "url()"
    }).parent().siblings().children("span").css({
        background: "url('../images/goods_tri.png') 100% 1rem no-repeat",
        backgroundSize: "100%"
    })
    $(".cyr-spxx-sort strong").css({
        left: ($(this).index() * 33.1 + 14) + "%"
    })
    $(".cyr-spxx-sort-content div").eq($(this).index()*3).show().siblings().hide();
})

$(".cyr-spxx-sort-content-tit span").tap(function() {
    $(this).addClass("cyr-spxx-list-sel").siblings().removeClass("cyr-spxx-list-sel").parents().siblings().children("ul").eq($(this).index()).addClass("cyr-spxx-list-sel").siblings().removeClass("cyr-spxx-list-sel");
})

$(".cyr-spxx-sort-content ul li").tap(function() {
    $(this).addClass("cyr-spxx-li-sel").siblings().removeClass("cyr-spxx-li-sel").parent().parent().parent().hide();
    $(".cyr-spxx-sort-tit span").css({
        background: "url('../images/goods_tri.png') 100% 1rem no-repeat",
        backgroundSize: "100%"
    }).eq($(this).parents().parents().parent("div").index()).html($(this).html());
})

// 评论页
$(".cyr-comment span").tap(function() {
    if ($("#cyr-comment-say").val()) {
        $(".cyr-comment-succeed").show();
        var cyrCon = "<dl><dt><a href=''><img src='../images/demo/food.jpg' /></a></dt><dd><a href=''>涛</a><span>回复</span><em>刚刚</em><p>" + $("#cyr-comment-say").val() + "</p></dd></dl>";
        $(".cyr-comment-content dl").eq(0).before(cyrCon);
        var timer = setTimeout(function() {
            $(".cyr-comment-succeed").hide();
        }, 1000);
    };
})
