<?php
	if(isset($searchResultList) && sizeof($searchResultList) != '0') {
		echo $this->element('common_search_nav');
	} else {
		echo '<br>';
	}
?>

<div class="box_01">
	<table class="tbl_02">
		<tr>
			<th class="">コード</th>
			<th class="">委託先会社名</th>
		</tr>

		<?php if(isset($searchResultList)) { ?>
			<?php foreach($searchResultList as $searchResult) : ?>
					<tr class="selectableRecord">
						<?php // TODO 動的に出したい。表示する項目名をテーブル毎にConstで持つようにする ?>
						<td><?php echo $searchResult['SmItakusakiKaisha']['ConsignmentCompanyCD'] ?></td>
						<td><?php echo $searchResult['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
					</tr>
			<?php endforeach ?>
		<?php } ?>
	</table>
</div><!-- //.box_01 -->

<td class="td1">
	<input id="Button1" type="button" onclick="commitSearchResult();" value="確定" />
</td>

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