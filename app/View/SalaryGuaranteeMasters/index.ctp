<div class="salaryGuaranteeMasters index">
	<h2><?php echo __('Salary Guarantee Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SalaryGuaranteeID'); ?></th>
			<th><?php echo $this->Paginator->sort('RevYMD'); ?></th>
			<th><?php echo $this->Paginator->sort('GuaranteeAmoTabCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryClassCD'); ?></th>
			<th><?php echo $this->Paginator->sort('FixedAmoAddAmounts'); ?></th>
			<th><?php echo $this->Paginator->sort('FixedRateAddRate'); ?></th>
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
	<?php foreach ($salaryGuaranteeMasters as $salaryGuaranteeMaster): ?>
	<tr>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RevYMD']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['GuaranteeAmoTabCD']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryClassCD']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['FixedAmoAddAmounts']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['FixedRateAddRate']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID']), null, __('Are you sure you want to delete # %s?', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salary Guarantee Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
