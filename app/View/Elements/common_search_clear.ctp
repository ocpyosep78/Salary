<?php
	echo
	'<table class="pagination box_common_search_header">
		<tbody>
			<tr>
				<td class="box_common_search_header_td01">
					<span class="Button1"><a href="#">前ページ</a></span>
				</td>
				<td class="box_common_search_header_td02">
					<span class="Button1"><a href="#">次ページ</a></span>
				</td>
				<td class="box_common_search_header_td03">
					<input type="text" width="30">/
				</td>
				<td class="box_common_search_header_td04">
					<input class="Button1" type="button" value="ジャンプ">
				</td>
			</tr>
		</tbody>
	</table>';
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

		<?php for($i = 1; $i <= 20; $i++) : ?>
			<tr class="commonSearchSelectableRecord">
				<td>　</td>
				<?php foreach($viewColumn as $columnId => $columnName) : ?>
					<td></td>
				<?php endforeach ?>
			</tr>
		<?php endfor ?>

	</table>
</div><!-- //.box_01 -->

<div class="box_common_search_footer">
	<input class="Button1 commit" type="button" onclick="commitForCommonSearch();" disabled="disabled" value="確定" />
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