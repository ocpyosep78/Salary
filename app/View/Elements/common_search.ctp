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
<input type="hidden" value= "" name="hidden-common-search-column-name" id="hidden-common-search-column-name" />
<input type="hidden" value= "" name="hidden-common-search-column-code" id="hidden-common-search-column-code" />
<input type="hidden" value= "" name="hidden-common-search-target-name" id="hidden-common-search-target-name" />
<input type="hidden" value= "" name="hidden-common-search-target-code" id="hidden-common-search-target-code" />

<script type="text/javascript">
	/**
	 * 共通検索
	 */
	function commonSearch() {

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
				$("#commonSearchResult").html(data);
			}
		});
	}
</script>
