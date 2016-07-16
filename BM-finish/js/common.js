$(function(){
	$(window).resize(infinite);
	function infinite() {
		var htmlWidth = $('html').width();
		if (htmlWidth >= 640) {
			$("html").css({
				"font-size" : "24px"
			});
		} else {
			$("html").css({
				"font-size" :  24 / 640 * htmlWidth + "px"
			});
		}
	}infinite();

	// 底部导航条
	$('.foot a').tap(function() {
		$(this).addClass('show').css('color', '#0079ff').siblings()
		.css('color', '#666');
	})
	// $('.foot a').eq(1).tap(function() {
	// 	location.href = 'center.php';
	// })
	// $('.foot a').eq(2).tap(function() {
	// 	location.href = 'allgoods.php';
	// })
	// $('.foot a').eq(3).tap(function() {
	// 	location.href = 'zfx-community1.php';
	// })
	// $('.foot a').eq(4).tap(function() {
	// 	location.href = 'enter.php';
	// })
});