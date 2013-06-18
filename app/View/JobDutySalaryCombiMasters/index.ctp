<div class="jobDutySalaryCombiMasters index">
	<h2><?php echo __('Job Duty Salary Combi Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('JobDutyCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobTypeName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobTypeShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobCategoryName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobCategoryShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('FullTimeSalaryTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('FullTimeSalaryTableName'); ?></th>
			<th><?php echo $this->Paginator->sort('FullTimeSalaryTableShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('ReappointSTCD'); ?></th>
			<th><?php echo $this->Paginator->sort('ReappointSTName'); ?></th>
			<th><?php echo $this->Paginator->sort('ReappointSTShortName'); ?></th>
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
	<?php foreach ($jobDutySalaryCombiMasters as $jobDutySalaryCombiMaster): ?>
	<tr>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobTypeName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobTypeShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobCategoryName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobCategoryShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['FullTimeSalaryTableCD']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['FullTimeSalaryTableName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['FullTimeSalaryTableShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['ReappointSTCD']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['ReappointSTName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['ReappointSTShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD']), null, __('Are you sure you want to delete # %s?', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Duty Salary Combi Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
