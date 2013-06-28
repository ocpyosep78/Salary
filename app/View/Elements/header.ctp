<?php echo $this->SalaryForm->create('S003', array('controller' => 'S003', 'action' => 'search')); ?>

	<table class="t_header">
		<tr>
			<td>
				<p class="title">研修委託会社コード</p>
				<input type="text" id="consignmentCompanyCd" name="consignmentCompanyCd" value="<?php echo Hash::get($searchCondition, 'consignmentCompanyCd'); ?>" />
				<input type="button" value="？" onclick="viewCommonSearch('SmItakusakiKaisha', 'ConsignmentCompanyName', 'ConsignmentCompanyCD');" />
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
	 * @param searchTable  検索対象のテーブル名
	 * @param searchColumn 検索対象のテーブルのカラム
	 * @param target       検索結果を設定する項目名
	 */
	function viewCommonSearch(searchTable, searchColumn, target) {
		$(function(){
			// hidden項目の設定
			alert();
alert(searchTable);
			$("#hidden-common-search-table").val(searchTable);
			$("#hidden-common-search-column").val(searchColumn);
			$("#hidden-common-search-target").val(target);

			// 検索子画面の表示
			// TODO モーダルで表示する
			$("#common_search").show();
		});
	}
</script>