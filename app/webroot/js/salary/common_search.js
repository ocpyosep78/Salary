;(function($) {

	/**
	 * 検索子画面の一覧部分でレコード選択時の処理
	 */
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

	/**
	 * Pagination（次へ、前へ）クリック処理
	 */
	$("#common-search-result .pagination .prev, #common-search-result .pagination .next").click(function() {

		// Ajax通信で次ページ（前ページ）を読み込む
		$("#common-search-result").load($(this).children("a").attr("href"));

		// ブラウザのイベント処理でhref属性に設定されたリンク先に移動させず、
		// jQueryの指定のみを有効にするため、"return false"とする。
		 return false;
	});

	/**
	 * Pagination（ジャンプ）クリック処理
	 */
	$("#common-search-result .pagination .jump").click(function() {

		// ジャンプ先のページ番号を取得
		var page = $(this).parent().find("input:first").val();

		// Ajax通信で指定ページを読み込む
		var url = "/CommonSearches/commonSearch/page:" + page;
		$("#common-search-result").load(url);
		return false;
	});
})(jQuery);