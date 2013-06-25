<table class="tbl_01">
	<tr>
		<td>
			<input id="Button1" type="button" value="前ページ" />
			<input id="Button1" type="button" value="次ページ" />
			<input type="text" />/<input type="text" />
			<input id="Button1" type="button" value="ジャンプ" />
		</td>
	</tr>
</table>

<div class="box_01">
	<table class="tbl_02">
		<tr>
			<th class="">コード</th>
			<th class="">委託先会社名</th>
		</tr>

		<?php if(isset($rtnSmItakusakiKaishaList)) { ?>
		<?php foreach($rtnSmItakusakiKaishaList as $items) : ?>
		<tr class="selectableRecord">
			<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyCD'] ?></td>
			<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
		</tr>
		<?php endforeach ?>
		<?php } ?>
	</table>
</div><!-- //.box_01 -->

<td class="td1">
	<input id="Button1" type="submit" value="確定" />
</td>