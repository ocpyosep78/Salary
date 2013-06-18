<div class="mgrAdditionMasters index">
	<h2><?php echo __('Mgr Addition Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RevYM'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeFrom'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeTo'); ?></th>
			<th><?php echo $this->Paginator->sort('Number'); ?></th>
			<th><?php echo $this->Paginator->sort('PayrollSystemFlg'); ?></th>
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
	<?php foreach ($mgrAdditionMasters as $mgrAdditionMaster): ?>
	<tr>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RevYM']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['JobGradeFrom']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['JobGradeTo']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['Number']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['PayrollSystemFlg']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($mgrAdditionMaster['MgrAdditionMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mgrAdditionMaster['MgrAdditionMaster']['RevYM'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mgrAdditionMaster['MgrAdditionMaster']['RevYM'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mgrAdditionMaster['MgrAdditionMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $mgrAdditionMaster['MgrAdditionMaster']['RevYM'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mgr Addition Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
