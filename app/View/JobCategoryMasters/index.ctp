<div class="jobCategoryMasters index">
	<h2><?php echo __('Job Category Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('JobDutyCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobTypeName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobTypeShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobCategoryMasters as $jobCategoryMaster): ?>
	<tr>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['JobDutyCD']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['JobTypeName']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['JobTypeShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['JobDutyName']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['JobDutyShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($jobCategoryMaster['JobCategoryMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD']), null, __('Are you sure you want to delete # %s?', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Category Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
