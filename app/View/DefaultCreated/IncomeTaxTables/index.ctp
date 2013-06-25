<div class="incomeTaxTables index">
	<h2><?php echo __('Income Tax Tables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('TableType'); ?></th>
			<th><?php echo $this->Paginator->sort('NoOfDependentFamily'); ?></th>
			<th><?php echo $this->Paginator->sort('AmountFrom'); ?></th>
			<th><?php echo $this->Paginator->sort('AmountTo'); ?></th>
			<th><?php echo $this->Paginator->sort('TaxAmount'); ?></th>
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
	<?php foreach ($incomeTaxTables as $incomeTaxTable): ?>
	<tr>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['TableType']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['NoOfDependentFamily']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['AmountFrom']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['AmountTo']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['TaxAmount']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($incomeTaxTable['IncomeTaxTable']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $incomeTaxTable['IncomeTaxTable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $incomeTaxTable['IncomeTaxTable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $incomeTaxTable['IncomeTaxTable']['id']), null, __('Are you sure you want to delete # %s?', $incomeTaxTable['IncomeTaxTable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Income Tax Table'), array('action' => 'add')); ?></li>
	</ul>
</div>
