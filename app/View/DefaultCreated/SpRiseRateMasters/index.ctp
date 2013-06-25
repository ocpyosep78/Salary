<div class="spRiseRateMasters index">
	<h2><?php echo __('Sp Rise Rate Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('DivMark'); ?></th>
			<th><?php echo $this->Paginator->sort('Rate'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th><?php echo $this->Paginator->sort('latest_data_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('last_key'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($spRiseRateMasters as $spRiseRateMaster): ?>
	<tr>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['ID']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['DivMark']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['Rate']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['latest_data_flg']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['last_key']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($spRiseRateMaster['SpRiseRateMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $spRiseRateMaster['SpRiseRateMaster']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $spRiseRateMaster['SpRiseRateMaster']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $spRiseRateMaster['SpRiseRateMaster']['ID']), null, __('Are you sure you want to delete # %s?', $spRiseRateMaster['SpRiseRateMaster']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sp Rise Rate Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
