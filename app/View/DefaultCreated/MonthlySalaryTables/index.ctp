<div class="monthlySalaryTables index">
	<h2><?php echo __('Monthly Salary Tables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('EmpDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryClass'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('OtherCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($monthlySalaryTables as $monthlySalaryTable): ?>
	<tr>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['EmpDiv']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['SalaryTableCD']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['SalaryClass']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['SalaryGrade']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['OtherCategory']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['PaymentAmount']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($monthlySalaryTable['MonthlySalaryTable']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $monthlySalaryTable['MonthlySalaryTable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $monthlySalaryTable['MonthlySalaryTable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $monthlySalaryTable['MonthlySalaryTable']['id']), null, __('Are you sure you want to delete # %s?', $monthlySalaryTable['MonthlySalaryTable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Monthly Salary Table'), array('action' => 'add')); ?></li>
	</ul>
</div>
