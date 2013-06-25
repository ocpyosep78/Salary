<div class="schoolMasters index">
	<h2><?php echo __('School Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SchoolCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SchoolName'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schoolMasters as $schoolMaster): ?>
	<tr>
		<td><?php echo h($schoolMaster['SchoolMaster']['SchoolCD']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['SchoolName']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($schoolMaster['SchoolMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $schoolMaster['SchoolMaster']['SchoolCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $schoolMaster['SchoolMaster']['SchoolCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $schoolMaster['SchoolMaster']['SchoolCD']), null, __('Are you sure you want to delete # %s?', $schoolMaster['SchoolMaster']['SchoolCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New School Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
