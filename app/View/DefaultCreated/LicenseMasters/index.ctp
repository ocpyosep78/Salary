<div class="licenseMasters index">
	<h2><?php echo __('License Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('LicenseCD'); ?></th>
			<th><?php echo $this->Paginator->sort('LicenseName'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($licenseMasters as $licenseMaster): ?>
	<tr>
		<td><?php echo h($licenseMaster['LicenseMaster']['LicenseCD']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['LicenseName']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($licenseMaster['LicenseMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $licenseMaster['LicenseMaster']['LicenseCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $licenseMaster['LicenseMaster']['LicenseCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $licenseMaster['LicenseMaster']['LicenseCD']), null, __('Are you sure you want to delete # %s?', $licenseMaster['LicenseMaster']['LicenseCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New License Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
