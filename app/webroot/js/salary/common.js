;(function($) {

	$(function() {

		// タブ内容を非表示にする
		$(".tabContent").hide();

		// タブ01を表示する
		$("#tab01content").show();

		// タブ01をアクティブスタイルにする
		$("#tabs .menu li:first").addClass('current');
	});

	/**
	 * タブ表示切替
	 */
	$("#tabs .menu li").click(function(){

		// タブ内容を非表示にする
		$(".tabContent").hide();

		// 選択されたタブを表示する
		var idx    = $("#tabs .menu li").index(this);
		var tabNum = ("0" + (idx + 1)).slice(-2);
		$("#tab" + tabNum + "content").show();

		// 選択されたタブをアクティブスタイルにする
		$("#tabs .menu li").removeClass('current');
		$(this).addClass('current');
	});
})(jQuery);