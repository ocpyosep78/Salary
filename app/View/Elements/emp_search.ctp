<div class="modalWindow fixed" id="emp-search">
	<div class="close"></div>
	<div class="modalBody">

		<table class="box_common_search_t_header">
			<tr>
				<th>カナ　氏<th>
				<td><input type="text" id="emp-search-keyword-family-name-kana" name="emp-search-keyword-family-name-kana" value="" /></td>
				<th>名<th>
				<td><input type="text" id="emp-search-keyword-first-name-kana" name="emp-search-keyword-first-name-kana" value="" /></td>
				<th>職種職務<th>
				<td><input type="text" id="emp-search-keyword-job-duty-" name="emp-search-keyword-" value="" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
				<td rowspan="2" class="td1 pd_01">
					<input class="Button1" type="button" onclick="searchForEmpSearch();" value="　検索　" />
				</td>
			</tr>
			<tr>
				<th>漢字　氏<th>
				<td><input type="text" id="emp-search-keyword-family-name" name="emp-search-keyword-family-name" value="" /></td>
				<th>名<th>
				<td><input type="text" id="emp-search-keyword-first-name" name="emp-search-keyword-first-name" value="" /></td>
				<th>職層<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
			</tr>
			<tr>
				<th>職員区分<th>
				<td><input type="text" id="emp-search-keyword-emp-div-from" name="emp-search-keyword-emp-div-from" value="" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-emp-div-to" name="emp-search-keyword-emp-div-to" value="" /></td>
				<th>所属<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
				<td rowspan="2" class="td1 pd_01">
					<input class="Button1" type="button" onclick="clearForCommonSearch()" value="　消去　" />
				</td>
			</tr>
			<tr>
				<th>退職者<th>
				<td colspan="4"></td>
				<th>役職<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-" name="emp-search-keyword-" value="" /></td>
			</tr>
		</table>

		<div id="emp-search-result">
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
	function viewForEmpSearch(table, columnName, columnCode, targetName, targetCode) {

		// hidden項目の設定
		$("#hidden-common-search-table").val(table);
		$("#hidden-common-search-column-name").val(columnName);
		$("#hidden-common-search-column-code").val(columnCode);
		$("#hidden-common-search-target-name").val(targetName);
		$("#hidden-common-search-target-code").val(targetCode);

		// 子画面の検索結果一覧をクリア
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'init')); ?>" + "?table=" + table + "&columnName=" + columnName + "&columnCode=" + columnCode,
			type: 'GET',
			success: function(data) {
				$("#emp-search-result").html(data);
			}
		});

		// 検索子画面の表示
		// モーダルで表示する
		$("#emp-search").modal();
	}

	/**
	 * テーブル検索
	 */
	function searchForEmpSearch() {

		// 検索キーワードの取得
		var keywordCd   = $("#emp-search-keyword-").val();
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
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'search')); ?>" + "?keywordCd=" + keywordCd + "&keywordName=" + keywordName + "&table=" + table + "&columnName=" + columnName + "&columnCode=" + columnCode,
			type: 'GET',
			success: function(data) {
				$("#common-search-result").html(data);
			}
		});
	}

	/**
	 * 検索結果のクリア
	 */
	function clearForEmpSearch() {

		// 親画面の項目IDを取得
		var targetCode = $("#hidden-common-search-target-code").val();
		var targetName = $("#hidden-common-search-target-name").val();

		// 親画面に設定した値をクリア
		$("#" + targetCode).val("");
		$("#" + targetName).html("");

		// 子画面の検索条件入力欄をクリア
		$("#emp-search-keyword-").val("");
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
</script>
