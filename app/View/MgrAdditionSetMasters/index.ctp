<div class="mgrAdditionSetMasters index">
	<h2><?php echo __('Mgr Addition Set Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RevYM'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeFrom'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeTo'); ?></th>
			<th><?php echo $this->Paginator->sort('AddRate'); ?></th>
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
	<?php foreach ($mgrAdditionSetMasters as $mgrAdditionSetMaster): ?>
	<tr>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['JobGradeFrom']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['JobGradeTo']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['AddRate']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mgr Addition Set Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
