<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div class="box_01">
	<p>■賃金</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>回数</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiChinginList as $meisaiUchiChingin): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.CodeName_AllowDetailName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.CodeName_AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.WorkTimes_LW'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!-- //.box_01 -->
