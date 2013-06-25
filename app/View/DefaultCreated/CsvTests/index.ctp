<div class="csvTests index">
	<h2><?php echo __('Csv Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('SexDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('DepCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyCD'); ?></th>
			<th><?php echo $this->Paginator->sort('LocalCD'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('PayerDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('CouponPaidDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('PaidCouponNum'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($csvTests as $csvTest): ?>
	<tr>
		<td><?php echo h($csvTest['CsvTest']['id']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['name']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['SexDiv']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['DepCD']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['JobDutyCD']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['LocalCD']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['EmpDiv']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['PayerDiv']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['CouponPaidDiv']); ?>&nbsp;</td>
		<td><?php echo h($csvTest['CsvTest']['PaidCouponNum']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $csvTest['CsvTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $csvTest['CsvTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $csvTest['CsvTest']['id']), null, __('Are you sure you want to delete # %s?', $csvTest['CsvTest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Csv Test'), array('action' => 'add')); ?></li>
	</ul>
</div>
