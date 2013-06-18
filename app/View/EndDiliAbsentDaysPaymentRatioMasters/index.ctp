<div class="endDiliAbsentDaysPaymentRatioMasters index">
	<h2><?php echo __('End Dili Absent Days Payment Ratio Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RevYM'); ?></th>
			<th><?php echo $this->Paginator->sort('MetWardDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('EndDiliMonPayment'); ?></th>
			<th><?php echo $this->Paginator->sort('EndDiligenceDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('Number'); ?></th>
			<th><?php echo $this->Paginator->sort('AbsentDaysFrom'); ?></th>
			<th><?php echo $this->Paginator->sort('AbsentDaysTo'); ?></th>
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
	<?php foreach ($endDiliAbsentDaysPaymentRatioMasters as $endDiliAbsentDaysPaymentRatioMaster): ?>
	<tr>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['MetWardDiv']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['EndDiliMonPayment']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['EndDiligenceDiv']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['Number']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['AbsentDaysFrom']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['AbsentDaysTo']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['PaymentRatio']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM'])); ?>
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
		<li><?php echo $this->Html->link(__('New End Dili Absent Days Payment Ratio Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
