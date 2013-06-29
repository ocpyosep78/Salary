<div class="modalWindow fixed" id="common_search">
	<div class="modalBody">

		<table class="t_header">
			<tr>
				<td>
					<p class="title">正式名称（部分検索可）</p>
					<input type="text" id="common-search-keyword" name="common-search-keyword" value="" />
				</td>
				<td class="td1">
					<input class="Button1" type="button" onclick="searchCommonSearch();" value="検索" />
					<input class="Button1" type="button" onclick="clearCommonSearch()" value="消去" />
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
	function viewCommonSearch(table, columnName, columnCode, targetName, targetCode) {
		$(function(){
			// hidden項目の設定
			$("#hidden-common-search-table").val(table);
			$("#hidden-common-search-column-name").val(columnName);
			$("#hidden-common-search-column-code").val(columnCode);
			$("#hidden-common-search-target-name").val(targetName);
			$("#hidden-common-search-target-code").val(targetCode);

			// 検索子画面の表示
			// TODO モーダルで表示する
			$("#common_search").show();
		});
	}

	/**
	 * テーブル検索
	 */
	function searchCommonSearch() {

		// 検索キーワードの取得
		var keyword = $("#common-search-keyword").val();

		// hidden項目の取得
		var table = $("#hidden-common-search-table").val();        // 検索対象のテーブル名
		var name  = $("#hidden-common-search-column-name").val();  // 検索対象のカラム（名称）
		var code  = $("#hidden-common-search-column-code").val();  // 検索対象のカラム（コード）

		// テーブルデータの取得（Ajax通信）
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'commonSearch')); ?>" + "?keyword=" + keyword + "&table=" + table + "&name=" + name + "&code=" + code,
			type: 'GET',
			success: function(data) {
				$("#common-search-result").html(data);
			}
		});
	}

	/**
	 * 検索結果のクリア
	 */
	function clearCommonSearch() {
		//

	}
</script>
