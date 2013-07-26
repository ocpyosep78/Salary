<?php
	if(isset($searchResultList) && sizeof($searchResultList) != '0') {
		echo $this->element('common_search_nav');
	} else {
		echo '<br>';
	}
?>

<?php // 検索結果一覧の表示 ?>
<div class="box_common_search">
	<table class="tbl_02">

		<tr>
			<th style="width:10%">連番</th>
			<th style="">職員番号</th>
			<th style="">漢字氏名</th>
			<th style="">カナ氏名</th>
			<th style="">職員区分</th>
			<th style="">退職</th>
			<th style="">所属CD</th>
			<th style="">所属名（短縮）</th>
			<th style="">役職CD</th>
			<th style="">役職名</th>
			<th style="">職務CD</th>
			<th style="">職務名</th>
		</tr>

		<?php if(isset($searchResultList)) { ?>
			<?php foreach($searchResultList as $key => $searchResult) : ?>

					<tr class="commonSearchSelectableRecord">
						<td><?php echo $this->SalaryForm->getSequentialNumber($this->SalaryPaginator->current(), PAGINATION_VIEW_LIMIT_COMMON_SEARCH, $key); ?></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonKihon.EmpNo'); ?></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonKihon.FamilyName'); ?><?php echo Hash::get($searchResult, 'JtKihonKihon.FirstName'); ?></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonKihon.FamilyNameKana'); ?><?php echo Hash::get($searchResult, 'JtKihonKihon.FirstNameKana'); ?></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonKihon.CodeName_EmpDivName'); ?></td>
						<td></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonRekiSyozoku.DepCD'); ?></td>
						<td></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonRekiSyozoku.MgrCD'); ?></td>
						<td></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonRekiSyokumu.JobDutyCD'); ?></td>
						<td></td>
					</tr>

			<?php endforeach ?>
		<?php } ?>

	</table>
</div><!-- //.box_01 -->

<div class="box_common_search_footer">
	<input class="Button1 commit" type="button" onclick="commitForEmpSearch();" disabled="disabled" value="　確定　" />
</div>

<script type="text/javascript">
	/**
	 * 「確定」ボタン押下処理
	 */
	function commitForEmpSearch() {

		// 選択値の設定先を取得する
		var targetCode = $("#hidden-common-search-target-code").val();
		var targetName = $("#hidden-common-search-target-name").val();

		// 選択値を取得する
		var selectName = $("#hidden-common-search-select-name").val();
		var selectCode = $("#hidden-common-search-select-code").val();

		// 選択値を親画面の項目に設定する
		$("#" + targetCode).val(selectName);
		$("#" + targetName).html(selectCode);

		// モーダルを閉じる
		$(".modalWindow,#blackLayer").hide();

		// 子画面の検索条件入力欄をクリア
		$("#common-search-keyword").val("");

		// 子画面の検索結果一覧をクリア
		$("#common-search-result").html("");

		// hidden項目をクリア
		$("#hidden-common-search-select-name").val("");
		$("#hidden-common-search-select-code").val("");
	}
</script>