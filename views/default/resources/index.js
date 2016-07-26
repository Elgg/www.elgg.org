$(function(){
	var $p = $('.community_login p');
	if ($p.length) {
		var $a = $('<a href="#">Register</a>');
		$('.elgg-menu-login-default').append($a.wrap('<li></li>'));
		$a.on('click', function () {
			$a.hide();
			$p.slideDown();
			return false;
		});
	}
});
