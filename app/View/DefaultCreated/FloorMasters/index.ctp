<div class="floorMasters index">
	<h2><?php echo __('Floor Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('FloorCD'); ?></th>
			<th><?php echo $this->Paginator->sort('FloorName'); ?></th>
			<th><?php echo $this->Paginator->sort('FloorShortName'); ?></th>
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
	<?php foreach ($floorMasters as $floorMaster): ?>
	<tr>
		<td><?php echo h($floorMaster['FloorMaster']['FloorCD']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['FloorName']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['FloorShortName']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($floorMaster['FloorMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $floorMaster['FloorMaster']['FloorCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $floorMaster['FloorMaster']['FloorCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $floorMaster['FloorMaster']['FloorCD']), null, __('Are you sure you want to delete # %s?', $floorMaster['FloorMaster']['FloorCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Floor Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
