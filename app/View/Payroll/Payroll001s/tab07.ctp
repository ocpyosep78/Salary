<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div class="box_01">
	<p>■能率給</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>名称</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>回数</th>
			<th>金額</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiNorituList as $meisaiUchiNoritu): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.CodeName_AllowDetailName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.CodeName_AccountName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.EfficiencyWagesTimes'); ?></td>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.EfficiencyWagesAmount'); ?></td>
				<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!-- //.box_01 -->
