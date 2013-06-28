;(function($) {

	// 一覧部分で選択されたレコードをhiddenに保持する
	$(".selectableRecords").click(function() {
		$(this).parent().children().removeClass("active");
		$(this).addClass("active");
	});

})(jQuery);