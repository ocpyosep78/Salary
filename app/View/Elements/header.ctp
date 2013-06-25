<?php echo $this->SalaryForm->create('S003', array('controller' => 'S003', 'action' => 'search')); ?>

	<table class="t_header">
		<tr>
			<td>
				<p class="title">研修委託会社コード</p>
				<input type="text" id="consignmentCompanyCd" name="consignmentCompanyCd" value="<?php echo Hash::get($searchCondition, 'consignmentCompanyCd'); ?>" />
				<input type="button" value="？" onclick="viewCommonSearch('consignmentCompanyCd', 'aaaaaa', 'bbbbbb');" />
				<p class="description">XXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
			</td>
			<td class="td1">
				<input id="Button1" type="submit" value="検索" />
				<input id="Button1" type="button" value="消去" />
			</td>
		</tr>
	</table>

</form>

<script type="text/javascript">
	/**
	 * 検索子画面の表示
	 *
	 * @param target       検索結果を設定する項目のID
	 * @param searchTable  検索対象のテーブル名
	 * @param searchColumn 検索対象のテーブルのカラム
	 */
	function viewCommonSearch(target, searchTable, searchColumn) {
		$(function(){
			//
			$("#common-search-target").val(target);
			$("#common-search-table").val(searchTable);
			$("#common-search-column").val(searchColumn);
			$("#common_search").show();
		});
	}
</script>