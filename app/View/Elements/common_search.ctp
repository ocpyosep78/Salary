<div class="modalWindow fixed" id="common_search">
	<div class="modalBody">

		<table class="t_header">
			<tr>
				<td>
					<p class="title">正式名称（部分検索可）</p>
					<input type="text" id="common-search-keyword" name="common-search-keyword" value="" />
				</td>
				<td class="td1">
					<input class="Button1" type="button" onclick="commonSearch();" value="検索" />
					<input class="Button1" type="button" value="消去" />
				</td>
			</tr>
		</table>

		<div id="commonSearchResult">
			<?php // ここにAjax通信による検索結果が表示される ?>
		</div>

	</div>
</div>

<?php // テーブル検索に使用する項目をhiddenで定義 ?>
<input type="hidden" value= "" name="hidden-common-search-table" id="hidden-common-search-table" />
<input type="hidden" value= "" name="hidden-common-search-column" id="hidden-common-search-column" />
<input type="hidden" value= "" name="hidden-common-search-target" id="hidden-common-search-target" />

<script type="text/javascript">
	/**
	 * 共通検索
	 */
	function commonSearch() {

		// 検索キーワードの取得
		var keyword = $("#common-search-keyword").val();

		// hidden項目の取得
		var table  = $("#hidden-common-search-table").val();  // テーブル名
		var column = $("#hidden-common-search-column").val(); // カラム名
		var target = $("#hidden-common-search-target").val(); // 検索結果項目名

		// テーブルデータの取得（Ajax通信）
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'commonSearch')); ?>" + "?keyword=" + keyword + "&table=" + table + "&column=" + column + "&target=" + target,
			type: 'GET',
			success: function(data) {
				$("#commonSearchResult").html(data);
			}
		});
	}
</script>
