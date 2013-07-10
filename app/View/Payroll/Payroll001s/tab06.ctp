<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div class="box_01">
	<p>■特殊勤務手当</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>回数</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiTokkinList as $meisaiUchiTokkin): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.CodeName_AllowDetailName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.CodeName_AccountName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.WorkTiimes_UQ'); ?></td>
				<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<p>■宿日直手当</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>回数</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiShukuList as $meisaiUchiShuku): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.CodeName_AllowDetailName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.CodeName_AccountName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.WorkTimes_ND'); ?></td>
				<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<p>■管理職特勤</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>回数</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiKantokuList as $meisaiUchiKantoku): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.CodeName_AllowDetailName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.CodeName_AccountName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.WorkTimes_AU'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!-- //.box_01 -->
