<?php
	if(isset($searchResultList) && sizeof($searchResultList) != '0') {
		echo $this->element('common_search_nav');
	} else {
		echo '<br>';
	}
?>

<?php // 表示する項目を定数ファイルから取得 ?>
<?php $viewColumn = $this->SalaryForm->getViewColumnForCommonSearch($tableName); ?>

<?php // 検索結果一覧の表示 ?>
<div class="box_common_search">
	<table class="tbl_02">

		<tr>
			<th style="width:10%">連番</th>
			<?php foreach($viewColumn as $columnName) : ?>
				<th style="width:50%"><?php echo $columnName ?></th>
			<?php endforeach ?>
		</tr>

		<?php if(isset($searchResultList)) { ?>
			<?php foreach($searchResultList as $key => $searchResult) : ?>

					<tr class="commonSearchSelectableRecord">
						<td><?php echo $this->SalaryForm->getSequentialNumber($this->SalaryPaginator->current(), PAGINATION_VIEW_LIMIT_COMMON_SEARCH, $key); ?></td>
						<?php foreach($viewColumn as $columnId => $columnName) : ?>
							<td class="<?php echo $columnId ?>"><?php echo $searchResult[$tableName][$columnId] ?></td>
						<?php endforeach ?>
					</tr>

			<?php endforeach ?>
		<?php } ?>

	</table>
</div><!-- //.box_01 -->

<div class="box_common_search_footer">
	<input class="Button1 commit" type="button" onclick="commitForCommonSearch();" disabled="disabled" value="　確定　" />
</div>

<script type="text/javascript">
	/**
	 * 「確定」ボタン押下処理
	 */
	function commitForCommonSearch() {

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