<div class="jobChangeReasonMasters index">
	<h2><?php echo __('Job Change Reason Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('JobChangeResCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobChangeResName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobChangeResShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobChangeReasonMasters as $jobChangeReasonMaster): ?>
	<tr>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResName']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResShortName']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD']), null, __('Are you sure you want to delete # %s?', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Change Reason Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
