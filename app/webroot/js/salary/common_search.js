;(function($) {

	/**
	 * Paginationクリック処理
	 */
	function paginationClick(url) {

		// 親画面の項目IDを取得
		var targetCode = $("#hidden-common-search-target-code").val();
		var targetName = $("#hidden-common-search-target-name").val();

		// 親画面に設定した値をクリア
		$("#" + targetCode).val("");
		$("#" + targetName).html("");

		// Ajax通信で指定ページを読み込む
		$("#common-search-result").load(url);
	}

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

		// 確定ボタンを活性化する
		$("#common-search-result .commit").removeAttr("disabled");
	});

	/**
	 * Pagination（次へ、前へ）クリック処理
	 */
	$("#common-search-result .pagination .prev, #common-search-result .pagination .next").click(function() {

		// Ajax通信用URLの取得
		var url = $(this).children("a").attr("href");

		// Paginationクリック時の処理を行う
		paginationClick(url);

		// ブラウザのイベント処理を無効にする
		 return false;
	});

	/**
	 * Pagination（ジャンプ）クリック処理
	 */
	$("#common-search-result .pagination .jump").click(function() {

		// Ajax通信用URLの取得
		var page = $(this).parent().find("input:first").val();
		var url = "/CommonSearches/search/page:" + page;

		// Paginationクリック時の処理を行う
		paginationClick(url);

		// ブラウザのイベント処理を無効にする
		return false;
	});
})(jQuery);