<div class="mgrPositionMasters index">
	<h2><?php echo __('Mgr Position Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('MgrCD'); ?></th>
			<th><?php echo $this->Paginator->sort('MgrName'); ?></th>
			<th><?php echo $this->Paginator->sort('MgrShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mgrPositionMasters as $mgrPositionMaster): ?>
	<tr>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['MgrCD']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['MgrName']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['MgrShortName']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['effective_Date']); ?>&nbsp;</td>
		<td><?php echo h($mgrPositionMaster['MgrPositionMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mgrPositionMaster['MgrPositionMaster']['MgrCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mgrPositionMaster['MgrPositionMaster']['MgrCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mgrPositionMaster['MgrPositionMaster']['MgrCD']), null, __('Are you sure you want to delete # %s?', $mgrPositionMaster['MgrPositionMaster']['MgrCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mgr Position Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
