;(function($) {

	/**
	 * 検索子画面の一覧部分でレコード選択時の処理
	 */
	$(".empSearchSelectableRecord").click(function(){

		// 選択されたレコードをアクティブにする
		$(this).parent().children().removeClass("active");
		$(this).addClass("active");

		// 選択値をhidden項目に設定する
		$("#hidden-emp-search-select-emp-no").val($(this).children("td.EmpNo").html());
		$("#hidden-emp-search-select-name-kana").val($(this).children("td.Name").html());

		// 確定ボタンを活性化する
		$("#emp-search-result .commit").removeAttr("disabled");
	});

	/**
	 * Paginationクリック処理
	 */
	function paginationClickForEmpSearch(url) {

		// 親画面に設定した値をクリア
		$("#EmpNo").val("");
		$("#NameKana").html("");

		// Ajax通信で指定ページを読み込む
		$("#emp-search-result").load(url);
	}

	/**
	 * Pagination（次へ、前へ）クリック処理
	 */
	$("#emp-search-result .pagination .prev, #emp-search-result .pagination .next").click(function() {

		// Ajax通信用URLの取得
		var url = $(this).children("a").attr("href");

		// Paginationクリック時の処理を行う
		paginationClickForEmpSearch(url);

		// ブラウザのイベント処理を無効にする
		 return false;
	});

	/**
	 * Pagination（ジャンプ）クリック処理
	 */
	$("#emp-search-result .pagination .jump").click(function() {

		// Ajax通信用URLの取得
		var page = $(this).parent().parent().find("input:first").val();
		var url = "/EmpSearches/search/page:" + page;

		// Paginationクリック時の処理を行う
		paginationClickForEmpSearch(url);

		// ブラウザのイベント処理を無効にする
		return false;
	});

})(jQuery);