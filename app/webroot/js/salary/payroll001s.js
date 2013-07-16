;(function($) {

	/**
	 * タブ表示切替（個別実装）
	 */
	$("#tabs .menu li").click(function(){

		// 選択されたタブのIDを取得する
		var idx        = $("#tabs .menu li").index(this);
		var tabNum     = ("0" + (idx + 1)).slice(-2);
		var selectedId = "#tab" + tabNum + "content";

		// タブ02が選択された場合
		if (selectedId == "#tab02content") {
			// 共通情報を非表示にする
			$("#tabCommonContents").hide();

		// タブ02以外が選択された場合
		} else {
			// 共通情報を表示する
			$("#tabCommonContents").show();
		}
	});
})(jQuery);