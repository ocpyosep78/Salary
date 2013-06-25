<div class="writingEvaluateMasters index">
	<h2><?php echo __('Writing Evaluate Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('WritingEvaluateCode'); ?></th>
			<th><?php echo $this->Paginator->sort('Marks'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($writingEvaluateMasters as $writingEvaluateMaster): ?>
	<tr>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['Marks']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode']), null, __('Are you sure you want to delete # %s?', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode'])); ?>
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
		<li><?php echo $this->Html->link(__('New Writing Evaluate Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
