<div class="salaryClassPassDivMasters index">
	<h2><?php echo __('Salary Class Pass Div Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SalaryClassPassDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryClassPassDivName'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryClassPassDivShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
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
	<?php foreach ($salaryClassPassDivMasters as $salaryClassPassDivMaster): ?>
	<tr>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDivName']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDivShortName']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv']), null, __('Are you sure you want to delete # %s?', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salary Class Pass Div Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
