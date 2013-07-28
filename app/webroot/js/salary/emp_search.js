;(function($) {
	/**
	 * モーダルウィンドウ
	 */
	$.fn.modalForEmpSearch = function(op){

		//option
		op = $.extend({
			type:"fixed",
			scrollTop : 20,
			scrollBottom : false
		},op);

		//setting
		if($("#blackLayer").length < 1){
			$("body").append("<div id='blackLayer'></div>");

			// モーダルの背景がクリックされた場合の処理
			$(".modalWindow .close").add("#blackLayer").click(function(){

				// モーダルを閉じる
				//$(".modalWindow,#blackLayer").hide();

				// 子画面の検索条件入力欄をクリア
				//$("#common-search-keyword").val("");
				// 子画面の検索結果一覧をクリア
				//$("#common-search-result").html("");

				// hidden項目をクリア
				//$("#hidden-common-search-select-name").val("");
				//$("#hidden-common-search-select-code").val("");

				return false;
			});
		}

		// モーダルのスタイル設定
		var target = $("#emp-search");
		target.css({
			display:"block",
			position:"absolute",
			top:$(window).scrollTop()+op.scrollTop,
			left:(op.type=="fixed")?"50%":op.type,
			marginLeft:(op.type=="fixed")?"-"+(target.width()/2)+"px":"0px"
		});

		// モーダルを表示する
		$("#blackLayer").show();
		return false;
	}

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
		$("#hidden-emp-search-select-birthday").val($(this).children("td.BirthDate").html());

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