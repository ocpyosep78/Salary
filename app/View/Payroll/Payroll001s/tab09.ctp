<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div class="box_01">
	<p>■福利控除</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>残回数</th>
			<th>金額</th>
		</tr>
		<?php foreach ($meisaiUchiFukurikojoList as $meisaiUchiFukurikojo): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.DeductionCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.CodeName_DeductionCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.ReminderCnt'); ?></td>
				<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.Amounts'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!-- //.box_01 -->
