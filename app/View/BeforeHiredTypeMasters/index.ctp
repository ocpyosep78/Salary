<div class="beforeHiredTypeMasters index">
	<h2><?php echo __('Before Hired Type Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('BeforeHiredTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('BeforeHiredTypeName'); ?></th>
			<th><?php echo $this->Paginator->sort('PlanHiredCatName'); ?></th>
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
	<?php foreach ($beforeHiredTypeMasters as $beforeHiredTypeMaster): ?>
	<tr>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeName']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['PlanHiredCatName']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD']), null, __('Are you sure you want to delete # %s?', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Before Hired Type Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
