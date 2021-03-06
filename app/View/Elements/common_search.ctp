<div class="modalWindow fixed" id="common-search">
	<div class="close pd_01" align="right"><input class="Button1" type="button" onclick="closeModal();" value="×" /></div>
	<div class="modalBody">

		<table class="box_common_search_t_header">
			<tr>
				<td style="width:200px">
					<p id="cdTitle" class="title"></p>
				</td>
				<td>
					<input type="text" id="common-search-keyword-cd" name="common-search-keyword-cd" value="" />
				</td>
				<td class="td1 pd_01">
					<input class="Button1" type="button" onclick="searchForCommonSearch();" value="　検索　" />
				</td>
			</tr>
			<tr>
				<td>
					<p id="nameTitle" class="title"></p>
				</td>
				<td>
					<input type="text" id="common-search-keyword-name" name="common-search-keyword-name" value="" />
				</td>
				<td class="td1 pd_02">
					<input class="Button1" type="button" onclick="clearForCommonSearch()" value="　消去　" />
				</td>
			</tr>
		</table>

		<div id="common-search-result">
			<?php // ここにAjax通信による検索結果が表示される ?>
		</div>

	</div>
</div>

<?php // テーブル検索に使用する項目をhiddenで定義 ?>
<input type="hidden" value= "" name="hidden-common-search-table" id="hidden-common-search-table" />
<input type="hidden" value= "" name="hidden-common-search-column-name" id="hidden-common-search-column-name" />
<input type="hidden" value= "" name="hidden-common-search-column-code" id="hidden-common-search-column-code" />
<input type="hidden" value= "" name="hidden-common-search-target-name" id="hidden-common-search-target-name" />
<input type="hidden" value= "" name="hidden-common-search-target-code" id="hidden-common-search-target-code" />
<input type="hidden" value= "" name="hidden-common-search-select-name" id="hidden-common-search-select-name" />
<input type="hidden" value= "" name="hidden-common-search-select-code" id="hidden-common-search-select-code" />
<input type="hidden" value= "" name="hidden-emp-err-message" id="hidden-emp-err-message" />
<input type="hidden" value= "1" name="hidden-emp-err-count" id="hidden-emp-err-count" />

<script type="text/javascript">
	/**
	 * 検索子画面の表示
	 *
	 * @param table      検索対象のテーブル名
	 * @param columnName 検索対象のカラム（名称）
	 * @param columnCode 検索対象のカラム（コード）
	 * @param targetName 検索結果の設定先（名称）
	 * @param targetCode 検索結果の設定先（コード）
	 */
	function viewForCommonSearch(table, columnName, columnCode, targetName, targetCode) {

		// hidden項目の設定
		$("#hidden-common-search-table").val(table);
		$("#hidden-common-search-column-name").val(columnName);
		$("#hidden-common-search-column-code").val(columnCode);
		$("#hidden-common-search-target-name").val(targetName);
		$("#hidden-common-search-target-code").val(targetCode);

		// 子画面の検索キーワードタイトルを取得
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'titleInit')); ?>" + "?table=" + table + "&column=" + columnCode,
			type: 'GET',
			success: function(data) {
				$("#cdTitle").html(data);
			}
		});

		// 子画面の検索ネームタイトルを取得
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'titleInit')); ?>" + "?table=" + table + "&column=" + columnName,
			type: 'GET',
			success: function(data) {
				$("#nameTitle").html(data);
			}
		});

		// 子画面の検索結果一覧をクリア
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'init')); ?>" + "?table=" + table + "&columnName=" + columnName + "&columnCode=" + columnCode,
			type: 'GET',
			success: function(data) {
				$("#common-search-result").html(data);
			}
		});

		// 検索子画面の表示
		// モーダルで表示する
		$("#common-search").modal();
	}

	/**
	 * テーブル検索
	 */
	function searchForCommonSearch() {

		if (!checkCommonConditionInput()) {
			return;
		}
		// 検索キーワードの取得
		var keywordCd   = $("#common-search-keyword-cd").val();
		var keywordName = $("#common-search-keyword-name").val();

		// hidden項目の取得
		var table      = $("#hidden-common-search-table").val();       // 検索対象のテーブル名
		var columnName = $("#hidden-common-search-column-name").val(); // 検索対象のカラム（名称）
		var columnCode = $("#hidden-common-search-column-code").val(); // 検索対象のカラム（コード）
		var targetCode = $("#hidden-common-search-target-code").val(); // 検索結果の設定先（名称）
		var targetName = $("#hidden-common-search-target-name").val(); // 検索結果の設定先（コード）

		// 親画面に設定した値をクリア
		$("#" + targetCode).val("");
		$("#" + targetName).html("");

		// テーブルデータの取得（Ajax通信）
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'search')); ?>" + "?keywordCd=" + keywordCd + "&keywordName=" + encodeURI(keywordName) + "&table=" + table + "&columnName=" + columnName + "&columnCode=" + columnCode,
			type: 'GET',
			cache: false,
			success: function(data) {
				$("#common-search-result").html(data);
			}
		});
	}

	/**
	 * 入力有無チェック
	 */
	function checkCommonConditionInput() {
		var keywordCd   = $("#common-search-keyword-cd").val();
		var keywordName = $("#common-search-keyword-name").val();
		if (keywordCd == "" && keywordName == "") {
			if(window.confirm('全件検索されますがよろしいですか？')) {
				return true;
			} else {
				return false;
			}
		}
		return true;
	}

	/**
	 * 検索結果のクリア
	 */
	function clearForCommonSearch() {

		// 親画面の項目IDを取得
		var targetCode = $("#hidden-common-search-target-code").val();
		var targetName = $("#hidden-common-search-target-name").val();

		// 親画面に設定した値をクリア
		$("#" + targetCode).val("");
		$("#" + targetName).html("");

		// 子画面の検索条件入力欄をクリア
		$("#common-search-keyword-cd").val("");
		$("#common-search-keyword-name").val("");

		var table = $("#hidden-common-search-table").val();       // 検索対象のテーブル名

		// 子画面の検索結果一覧をクリア
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'clear')); ?>" + "?table=" + table,
			type: 'GET',
			success: function(data) {
				$("#common-search-result").html(data);
			}
		});
	}

	/**
	 * モーダルを閉じる
	 */
	function closeModal() {
		// モーダルを閉じる
		$(".modalWindow,#blackLayer").hide();
	}
</script>
