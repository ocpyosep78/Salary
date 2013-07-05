<?php
	echo
	'<table class="pagination tbl_01">
		<tbody>
			<tr>
				<td>
					<input type="text" width="30" value="1">/ 1
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