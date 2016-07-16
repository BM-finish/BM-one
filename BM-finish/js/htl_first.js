$(function() {
	// 《登入》页面
	// 跳转页面
	$('.htl-create').tap(function() {
		location.href = "register.php"
	})
	// 注册
	$(".htl-regis-btn").tap(function() {
		window.location.href = "enter.php"
	})
	//登录
	$(".htl-enter-btn").tap(function() {
		window.location.href = "zfx-centre.php"
	})
	// $(".htl-regis-btn").tap(function() {
	// 	$.post("../php/register.php", $(".htl-regisF").serializeArray(), function(response) {
	// 		if (!response.state) {
	// 			console.log(response.state)
	// 			$('.htl-regis-njudge').html('用户名已存在');
	// 		} else {
	// 			$(".cyr-register-succeed").show();
	// 		}
	// 	})
	// })
	// $(".cyr-register-succeed span").tap(function() {
	// 	var registerOk = setTimeout(function() {
	// 		$(".cyr-register-succeed").hide();
	// 	}, 1000);
	// 	// window.location.href = "enter.php";
	// })
	// 登录
	// $(".htl-enter-btn").tap(function() {
	// 	$.post("../php/login.php", $("form").serializeArray(), function(response) {
	// 		if (!response.state) {
	// 			$(".cyr-enter-tip").show();
	// 		} else {
	// 			$(".cyr-enter-succeed").show();
	// 		}
	// 	})
	// })
	// $(".cyr-enter-succeed span").tap(function() {
	// 	var enterOk = setTimeout(function() {
	// 		$(".cyr-enter-succeed").hide();
	// 	}, 1000);
	// 	// window.location.href = "centre.php";
	// })
	
	// 记住密码
	$('.htl-enter-remb em, .htl-enter-remb span').tap(function() {
		if($('.htl-enter-remb span').hasClass('htl-enter-select')) {
			$('.htl-enter-remb span').removeClass('htl-enter-select');
		}else {
			$('.htl-enter-remb span').addClass('htl-enter-select');
		}
	})
	// 《修改密码》页面
	$('#newpass').blur(function() {
		var htlNewpass = /^[a-zA-Z]\w{5,15}$/ig;
		var htlNewpIsbool = htlNewpass.test($(this).val());
		if(!htlNewpIsbool) {
			$('.htl-changeF-newcue').show();
		}else {
			$('.htl-changeF-newcue').hide();
		}
	})
	$('#comfpass').blur(function() {
		if($(this).val() == $('#newpass').val()) {
			$('.htl-changeF-comfcue').hide();
		}else {
			$('.htl-changeF-comfcue').show();
		}
	})

	// 《业主认证信息》页面
	$('#htl-phone').blur(function() {
		var htlIdtPne = /^1[3|4|5|7|8]\d{9}$/ig;
		var htlIdentPisB = htlIdtPne.test($(this).val());
		if(htlIdentPisB) {
			$('.htl-identF-phonecue').hide();
		}else {
			$('.htl-identF-phonecue').show();
		}
	});
	$('#htl-place').blur(function() {
		var htlIdtplace = /([\u4e00-\u9fa5]|[a-zA-Z])+/ig;
		var htlIdtPisB = htlIdtplace.test($(this).val());
		if(htlIdtPisB) {
			$('.htl-identF-placecue').hide();
		}else {
			$('.htl-identF-placecue').show();
		}
	})
	$('#htl-email').blur(function() {
		var htlIdtEmail = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ig;
		var htlIdtEisB = htlIdtEmail.test($(this).val());
		if(htlIdtEisB) {
			$('.htl-identF-emailcue').hide();
		}else {
			$('.htl-identF-emailcue').show();
		}
	})
	// 《注册》页面
	$('#htl-regis-username').blur(function() {
		var htlEnterUser = /^[a-zA-z][a-zA-Z0-9_]{2,9}$/ig;
		var htlUserIsbool = htlEnterUser.test($(this).val());
		if(!htlUserIsbool) {
			$('.htl-regis-njudge').html('用户名格式错误');
		}else {
			$('.htl-regis-njudge').html('');
		}
	})
	// 密码的判断
	$('#htl-regis-password').blur(function() {
		var htlEnterPass = /^[a-zA-Z]\w{5,15}$/ig;
		var htlPassIsbool = htlEnterPass.test($(this).val());
		if(!htlPassIsbool) {
			$('.htl-regis-pjudge').html('以字母开头，长度在6~16之间，只能包含字符、数字和下划线');
		}else {
			$('.htl-regis-pjudge').html('');
		}
	})
	// 记住密码
	$('.htl-regis-remb em, .htl-regis-remb span').tap(function() {
		if($('.htl-regis-remb span').hasClass('htl-regis-select')) {
			$('.htl-regis-remb span').removeClass('htl-regis-select');
		}else {
			$('.htl-regis-remb span').addClass('htl-regis-select');
		}
	})
	// 同意协议
	$('.htl-regis-agree em, .htl-regis-agree span').tap(function() {
		if($('.htl-regis-agree span').hasClass('htl-regis-agree-select')) {
			$('.htl-regis-agree span').removeClass('htl-regis-agree-select');
		}else {
			$('.htl-regis-agree span').addClass('htl-regis-agree-select');
		}
	})
	// 性别的选择
	$('.htl-man-sel, .htl-man').tap(function() {
		$('.htl-man-sel b').css('display','block');
		$('.htl-woman-sel b').hide();
	});
	$('.htl-woman-sel, .htl-woman').tap(function() {
		$('.htl-woman-sel b').show();
		$('.htl-man-sel b').hide();
	});

	//《报修》
	$('.htl-rep-sub').tap(function() {
		location.href = "repair_message.php"
	})
	
})