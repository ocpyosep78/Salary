<div class="fixSalaryEmpInformations index">
	<h2><?php echo __('Fix Salary Emp Informations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('FixSalaryEmpInformationID'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('PreSalaryTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryTabCD'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryClass'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryStartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryEndReasonCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RemarksForFixed'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fixSalaryEmpInformations as $fixSalaryEmpInformation): ?>
	<tr>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['PreSalaryTableCD']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryTabCD']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryClass']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryGrade']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryStartDate']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEndDate']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEndReasonCD']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['RemarksForFixed']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID']), null, __('Are you sure you want to delete # %s?', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fix Salary Emp Information'), array('action' => 'add')); ?></li>
	</ul>
</div>
