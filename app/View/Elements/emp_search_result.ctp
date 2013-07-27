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

					<tr class="empSearchSelectableRecord">
						<td>
							<?php echo $this->SalaryForm->getSequentialNumber($this->SalaryPaginator->current(), PAGINATION_VIEW_LIMIT_COMMON_SEARCH, $key); ?>
						</td>
						<td class="EmpNo"><?php echo Hash::get($searchResult, 'JtKihonKihon.EmpNo'); ?></td>
						<td class="Name"><?php echo Hash::get($searchResult, 'JtKihonKihon.FamilyName'); ?><?php echo Hash::get($searchResult, 'JtKihonKihon.FirstName'); ?></td>
						<td class="NameKana"><?php echo Hash::get($searchResult, 'JtKihonKihon.FamilyNameKana'); ?><?php echo Hash::get($searchResult, 'JtKihonKihon.FirstNameKana'); ?></td>
						<td><?php echo Hash::get($searchResult, 'JtKihonKihon.CodeName_EmpDivName'); ?></td>
						<td>
							<?php $retiredDate = Hash::get($searchResult, 'JtKihonKihon.RetiredDate'); ?>
							<input type="checkbox" name="retired" value="0" id="retired" <?php if(!is_null($retiredDate)) echo 'checked' ?> disabled />
						</td>
						<td class="DepCD"><?php echo Hash::get($searchResult, 'JtKihonRekiSyozoku.DepCD'); ?></td>
						<td></td>
						<td class="MgrCD"><?php echo Hash::get($searchResult, 'JtKihonRekiSyozoku.MgrCD'); ?></td>
						<td></td>
						<td class="JobDutyCD"><?php echo Hash::get($searchResult, 'JtKihonRekiSyokumu.JobDutyCD'); ?></td>
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

		// 選択値を取得する
		var empNo    = $("#hidden-emp-search-select-emp-no").val();
		var nameKana = $("#hidden-emp-search-select-name-kana").val();

		// 選択値を親画面の項目に設定する
		$("#EmpNo").val(empNo);
		$("#NameKana").html(nameKana);

		// モーダルを閉じる
		$(".modalWindow,#blackLayer").hide();

		// 子画面の検索条件入力欄をクリア
		$("#emp-search-keyword-family-name-kana").val("");
		$("#emp-search-keyword-first-name-kana").val("");
		$("#emp-search-keyword-job-duty-cd-from").val("");
		$("#emp-search-keyword-job-duty-cd-to").val("");
		$("#emp-search-keyword-family-name").val("");
		$("#emp-search-keyword-first-name").val("");
		$("#emp-search-keyword-job-grade-cd-from").val("");
		$("#emp-search-keyword-job-grade-cd-to").val("");
		$("#emp-search-keyword-emp-div-from").val("");
		$("#emp-search-keyword-emp-div-to").val("");
		$("#emp-search-keyword-dep-cd-from").val("");
		$("#emp-search-keyword-dep-cd-to").val("");
		$("input[type='radio'][name='emp-search-keyword-retired']").attr("checked",false);
		$("#emp-search-keyword-mgr-cd-from").val("");
		$("#emp-search-keyword-mgr-cd-to").val("");

		// 子画面の検索結果一覧をクリア
		$("#emp-search-result").html("");

		// hidden項目をクリア
		$("#hidden-emp-search-select-emp-no").val("");
		$("#hidden-emp-search-select-name-kana").val("");
	}
</script>