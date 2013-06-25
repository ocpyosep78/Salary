<div class="salaryGuaranteeDetails index">
	<h2><?php echo __('Salary Guarantee Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SalaryGuaranteeDetailID'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryGuaranteeID'); ?></th>
			<th><?php echo $this->Paginator->sort('GuaranteeAmoTabGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('MonthlyAmonut'); ?></th>
			<th><?php echo $this->Paginator->sort('AddAllow'); ?></th>
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
	<?php foreach ($salaryGuaranteeDetails as $salaryGuaranteeDetail): ?>
	<tr>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['GuaranteeAmoTabGrade']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['MonthlyAmonut']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['AddAllow']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID']), null, __('Are you sure you want to delete # %s?', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salary Guarantee Detail'), array('action' => 'add')); ?></li>
	</ul>
</div>
