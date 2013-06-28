<?php
	if(isset($searchResultList) && sizeof($searchResultList) != '0') {
		echo $this->element('common_search_nav');
	} else {
		echo '<br>';
	}
?>

<?php // 表示する項目を取得 ?>
<?php $viewColumn = $this->SalaryForm->getViewColumnForCommonSearch($tableName); ?>

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

					<tr class="selectableRecords">
						<td><?php echo $key + 1 ?></td>
						<?php foreach($viewColumn as $columnId => $columnName) : ?>
							<td><?php echo $searchResult[$tableName][$columnId] ?></td>
						<?php endforeach ?>
					</tr>

			<?php endforeach ?>
		<?php } ?>

	</table>
</div><!-- //.box_01 -->

<input class="Button1" type="button" onclick="commitSearchResult();" value="確定" />

<script type="text/javascript">
	/**
	 * 「確定」ボタン押下処理
	 */
	function commitSearchResult() {
		$(function(){
			// 検索結果を設定する項目のIDを取得
			var target = "#" + $("#hidden-common-search-target").val();

			// TODO 親画面の項目に検索結果を設定する
			$(target).val("ああああ");
		});
	}
</script>