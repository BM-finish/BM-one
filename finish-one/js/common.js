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
		console.log($(this));
		$(this).addClass('show').css('color', '#0079ff').siblings()
		.css('color', '#666');
	})
});