<div class="hourlySalaryCalcCondBaseMasters index">
	<h2><?php echo __('Hourly Salary Calc Cond Base Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('FiscalYear'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('AllowCD'); ?></th>
			<th><?php echo $this->Paginator->sort('Number'); ?></th>
			<th><?php echo $this->Paginator->sort('RegDate'); ?></th>
			<th><?php echo $this->Paginator->sort('RegisteredBy'); ?></th>
			<th><?php echo $this->Paginator->sort('RegPgID'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdateBy'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdatePgmID'); ?></th>
			<th><?php echo $this->Paginator->sort('DeleteFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('VersionNo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hourlySalaryCalcCondBaseMasters as $hourlySalaryCalcCondBaseMaster): ?>
	<tr>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['SalaryTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['AllowCD']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['Number']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear']), null, __('Are you sure you want to delete # %s?', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hourly Salary Calc Cond Base Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
