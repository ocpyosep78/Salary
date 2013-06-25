<div class="medDocAllowanceTables index">
	<h2><?php echo __('Med Doc Allowance Tables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('MedWorkingYears'); ?></th>
			<th><?php echo $this->Paginator->sort('NetAmount'); ?></th>
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
	<?php foreach ($medDocAllowanceTables as $medDocAllowanceTable): ?>
	<tr>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['MedWorkingYears']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['NetAmount']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $medDocAllowanceTable['MedDocAllowanceTable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $medDocAllowanceTable['MedDocAllowanceTable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $medDocAllowanceTable['MedDocAllowanceTable']['id']), null, __('Are you sure you want to delete # %s?', $medDocAllowanceTable['MedDocAllowanceTable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Med Doc Allowance Table'), array('action' => 'add')); ?></li>
	</ul>
</div>
