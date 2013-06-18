<div class="mgrPassDivMasters index">
	<h2><?php echo __('Mgr Pass Div Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('MgrPassDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('MgrPassDivName'); ?></th>
			<th><?php echo $this->Paginator->sort('MgrPassDivShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
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
	<?php foreach ($mgrPassDivMasters as $mgrPassDivMaster): ?>
	<tr>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['MgrPassDivName']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['MgrPassDivShortName']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($mgrPassDivMaster['MgrPassDivMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv']), null, __('Are you sure you want to delete # %s?', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mgr Pass Div Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
