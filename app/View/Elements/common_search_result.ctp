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
<div class="box_01">
	<table class="tbl_02">

		<tr>
			<th class="">Seq</th>
			<?php foreach($viewColumn as $columnName) : ?>
				<th><?php echo $columnName ?></th>
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

<input class="Button1 commit" type="button" onclick="commitForCommonSearch();" disabled="disabled" value="確定" />

<script type="text/javascript">
	/**
	 * 「確定」ボタン押下処理
	 */
	function commitForCommonSearch() {

		// モーダルを閉じる
		$(".modalWindow,#blackLayer").hide();

		// 子画面の検索条件入力欄をクリア
		$("#common-search-keyword").val("");

		// 子画面の検索結果一覧をクリア
		$("#common-search-result").html("");
	}
</script>