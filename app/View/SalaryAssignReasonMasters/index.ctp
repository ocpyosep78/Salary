<div class="salaryAssignReasonMasters index">
	<h2><?php echo __('Salary Assign Reason Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SalaryAssignResCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryAssignResName'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryAssignResShortName'); ?></th>
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
	<?php foreach ($salaryAssignReasonMasters as $salaryAssignReasonMaster): ?>
	<tr>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResName']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResShortName']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD']), null, __('Are you sure you want to delete # %s?', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salary Assign Reason Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
