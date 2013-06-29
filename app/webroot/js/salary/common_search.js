;(function($) {

	// 検索子画面の一覧部分でレコード選択時の処理
	$(".commonSearchSelectableRecord").click(function(){

		// 選択されたレコードをアクティブにする
		$(this).parent().children().removeClass("active");
		$(this).addClass("active");

		// 項目名を取得する
		var columnCode = $("#hidden-common-search-column-code").val();
		var columnName = $("#hidden-common-search-column-name").val();

		// 選択値の設定先を取得する
		var targetCode = $("#hidden-common-search-target-code").val();
		var targetName = $("#hidden-common-search-target-name").val();

		// 選択値を親画面の項目に設定する
		$("#" + targetCode).val($(this).children("td." + columnCode).html());
		$("#" + targetName).html($(this).children("td." + columnName).html());
	});

})(jQuery);