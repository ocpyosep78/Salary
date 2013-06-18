<div class="deductionData index">
	<h2><?php echo __('Deduction Data'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('DeductionYm'); ?></th>
			<th><?php echo $this->Paginator->sort('DeductionDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('DeductionCD'); ?></th>
			<th><?php echo $this->Paginator->sort('WelfareEnrollInfoID'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpProcessRunID'); ?></th>
			<th><?php echo $this->Paginator->sort('DeductionStartYm'); ?></th>
			<th><?php echo $this->Paginator->sort('DeductionEndYm'); ?></th>
			<th><?php echo $this->Paginator->sort('LoanNo'); ?></th>
			<th><?php echo $this->Paginator->sort('LoanAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('FirstRepaymentAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('RepaymentAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('LastRepaymentAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('RepaymentCnt'); ?></th>
			<th><?php echo $this->Paginator->sort('ReminderCnt'); ?></th>
			<th><?php echo $this->Paginator->sort('HesitReminderCnt'); ?></th>
			<th><?php echo $this->Paginator->sort('SavingAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('ReturnAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('AccumAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('HouseAccumAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('DeductionResultCD'); ?></th>
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
	<?php foreach ($deductionData as $deductionDatum): ?>
	<tr>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeductionYm']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeductionDivCD']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeductionCD']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['WelfareEnrollInfoID']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['EmpProcessRunID']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeductionStartYm']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeductionEndYm']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['LoanNo']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['LoanAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['FirstRepaymentAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['RepaymentAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['LastRepaymentAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['RepaymentCnt']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['ReminderCnt']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['HesitReminderCnt']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['SavingAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['ReturnAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['AccumAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['HouseAccumAmount']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeductionResultCD']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($deductionDatum['DeductionDatum']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deductionDatum['DeductionDatum']['DeductionYm'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deductionDatum['DeductionDatum']['DeductionYm'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deductionDatum['DeductionDatum']['DeductionYm']), null, __('Are you sure you want to delete # %s?', $deductionDatum['DeductionDatum']['DeductionYm'])); ?>
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
		<li><?php echo $this->Html->link(__('New Deduction Datum'), array('action' => 'add')); ?></li>
	</ul>
</div>
