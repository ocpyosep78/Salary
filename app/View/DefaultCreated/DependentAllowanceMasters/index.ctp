<div class="dependentAllowanceMasters index">
	<h2><?php echo __('Dependent Allowance Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('DependentAllowanceMasterID'); ?></th>
			<th><?php echo $this->Paginator->sort('RevYM'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('AmountPartner'); ?></th>
			<th><?php echo $this->Paginator->sort('AmountFirst'); ?></th>
			<th><?php echo $this->Paginator->sort('Amount1'); ?></th>
			<th><?php echo $this->Paginator->sort('Amount2'); ?></th>
			<th><?php echo $this->Paginator->sort('Amount3Over'); ?></th>
			<th><?php echo $this->Paginator->sort('AmountSpecialSum'); ?></th>
			<th><?php echo $this->Paginator->sort('SpecialSumStartAge'); ?></th>
			<th><?php echo $this->Paginator->sort('SpecialSumEndAge'); ?></th>
			<th><?php echo $this->Paginator->sort('AllowanceEndAge'); ?></th>
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
	<?php foreach ($dependentAllowanceMasters as $dependentAllowanceMaster): ?>
	<tr>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RevYM']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['SalaryTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AmountPartner']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AmountFirst']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['Amount1']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['Amount2']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['Amount3Over']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AmountSpecialSum']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['SpecialSumStartAge']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['SpecialSumEndAge']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AllowanceEndAge']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID']), null, __('Are you sure you want to delete # %s?', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dependent Allowance Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
