<div class="retirementAllowanceTables index">
	<h2><?php echo __('Retirement Allowance Tables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ServiceYears'); ?></th>
			<th><?php echo $this->Paginator->sort('RetirementCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentRatio'); ?></th>
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
	<?php foreach ($retirementAllowanceTables as $retirementAllowanceTable): ?>
	<tr>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['ServiceYears']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RetirementCategory']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['PaymentRatio']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $retirementAllowanceTable['RetirementAllowanceTable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $retirementAllowanceTable['RetirementAllowanceTable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $retirementAllowanceTable['RetirementAllowanceTable']['id']), null, __('Are you sure you want to delete # %s?', $retirementAllowanceTable['RetirementAllowanceTable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Retirement Allowance Table'), array('action' => 'add')); ?></li>
	</ul>
</div>
