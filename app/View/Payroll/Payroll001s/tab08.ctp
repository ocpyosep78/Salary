<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div class="box_01">
	<p>■旅費</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>支出所属</th>
			<th>所属名</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>金額</th>
		</tr>
		<?php foreach ($meisaiUchiRyohiList as $meisaiUchiRyohi): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.TravelExpTypeCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.CodeName_TravelExpTypeCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.ExpendDepCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.CodeName_ExpendDepCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.CodeName_AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.ExpenseAmount'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!-- //.box_01 -->
