;(function($) {
	/**
	 * モーダルウィンドウ
	 */
	$.fn.modal = function(op){

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
		var target = $("#common-search");
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
	 * モーダルウィンドウ
	 */
	$.fn.modalError = function(op){

		//option
		op = $.extend({
			type:"fixed",
			scrollTop : 20,
			scrollBottom : false
		},op);

		// モーダルのスタイル設定
		var target = $(".modalWindowError");
		target.css({
			display:"block",
			position:"absolute",
			top:$(window).scrollTop()+op.scrollTop,
			left:(op.type=="fixed")?"50%":op.type,
			marginLeft:(op.type=="fixed")?"-"+(target.width()/2)+"px":"0px"
		});

		// モーダルを表示する
//		$("#blackLayer").show();
		return false;
	}

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

		// 選択値をhidden項目に設定する
		$("#hidden-common-search-select-name").val($(this).children("td." + columnCode).html());
		$("#hidden-common-search-select-code").val($(this).children("td." + columnName).html());

		// 確定ボタンを活性化する
		$("#common-search-result .commit").removeAttr("disabled");
	});

	/**
	 * Pagination（次へ、前へ）クリック処理
	 */
	$("#common-search-result .pagination .prev, #common-search-result .pagination .next").click(function() {

		// Ajax通信用URLの取得
		var url = $(this).children("a").attr("href");

		var temp = url.split("page:");
		var temp = temp[1].split("/");
		var page = temp[0];
		if (page == 0) {
			$("#hidden-emp-err-message").val("前のページはありません。");
			viewForEmpSearchError();
			return false;
		} else {
			var totalPageStr = $("#common-search-result .box_common_search_header_td03").text();
			temp = totalPageStr.split("/ ");
			if (temp.length == 2) {
				var totalPage = parseInt(temp[1]);
				if (page > totalPage) {
					$("#hidden-emp-err-message").val("次のページはありません。");
					viewForEmpSearchError();
					return false;
				}
			}
		}

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
		// IE8に対応するため取得方法を変える
//		var page = $(this).parent().parent().find("input:first").val();
		var page = document.forms["PaginatorSearchForm"].elements["data[page]"].value;

		if(isNaN(page)) {
			$("#hidden-emp-err-message").val("指定されたページはありません。");
			viewForEmpSearchError();
			return false;
		}
		var tempPage = parseInt(page);
		if (tempPage < 1) {
			$("#hidden-emp-err-message").val("指定されたページはありません。");
			viewForEmpSearchError();
			return false;
		} else {
			var totalPageStr = $("#common-search-result .box_common_search_header_td03").text();
			var temp = totalPageStr.split("/ ");
			if (temp.length == 2) {
				var totalPage = parseInt(temp[1]);
				if (tempPage > totalPage) {
					$("#hidden-emp-err-message").val("指定されたページはありません。");
					viewForEmpSearchError();
					return false;
				}
			}
		}

		var url = "/CommonSearches/search/page:" + page;

		// Paginationクリック時の処理を行う
		paginationClick(url);

		// ブラウザのイベント処理を無効にする
		return false;
	});

	$(document).ready(function(){
	    $("table.tbl_02 tr:even").css({
	    	backgroundColor:'#edf9da'
	    });
	});

	$('table.tbl_02 tr').each(function(){
		var bgColor = $(this).css('backgroundColor');
		$(this).hover(function(){
			$(this).css({
				backgroundColor:'#b1e0fd'
			});
		},function(){
		    $("table.tbl_02 tr:odd").css({
		    	backgroundColor:'#ffffff'
		    });
		    $("table.tbl_02 tr:even").css({
		    	backgroundColor:'#edf9da'
		    });
		    $("tr.active").css({
		    	backgroundColor:'#b1e0fd'
		    });
		});
	});

})(jQuery);