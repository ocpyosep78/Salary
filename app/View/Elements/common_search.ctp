<div class="modalWindow fixed" id="common_search">
	<div class="modalBody">

		<table class="t_header">
			<tr>
				<td>
					<p class="title">正式名称（部分検索可）</p>
					<input type="text" name="consignmentCompanyCd" value="" />
				</td>
				<td class="td1">
					<input id="Button1" type="button" onclick="commonSearch();" value="検索" />
					<input id="Button1" type="button" value="消去" />
				</td>
			</tr>
		</table>

		<div id="commonSearchResult">
			<?php // ここにAjax通信による検索結果が表示される ?>
		</div>

	</div>
</div>

<?php // テーブル検索に使用する項目をhiddenで定義 ?>
<input type="hidden" value= "" name="common-search-target" id="common-search-target" />
<input type="hidden" value= "" name="common-search-table" id="common-search-table" />
<input type="hidden" value= "" name="common-search-column" id="common-search-column" />

<script type="text/javascript">
	/**
	 * 共通検索
	 */
	function commonSearch() {
		// テーブル名、カラム名の取得
		var table  = $("#common-search-table").val();  // テーブル名
		var column = $("#common-search-column").val(); // カラム名

		// テーブルデータの取得（Ajax通信）
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'commonSearch')); ?>" + "?table=" + table + "&column=" + column,
			type: 'GET',
			success: function(data) {
				$("#commonSearchResult").html(data);
			}
		});
	}
</script>
