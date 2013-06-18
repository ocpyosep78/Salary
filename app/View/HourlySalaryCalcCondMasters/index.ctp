<div class="hourlySalaryCalcCondMasters index">
	<h2><?php echo __('Hourly Salary Calc Cond Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('FiscalYear'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('WeekPerYear'); ?></th>
			<th><?php echo $this->Paginator->sort('WorkingTimesOfWeekHour'); ?></th>
			<th><?php echo $this->Paginator->sort('WorkingTimesOfWeekMinite'); ?></th>
			<th><?php echo $this->Paginator->sort('HolidayPerYear'); ?></th>
			<th><?php echo $this->Paginator->sort('WorkingTimesOfDayHour'); ?></th>
			<th><?php echo $this->Paginator->sort('WorkingTimesOfDayMinite'); ?></th>
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
	<?php foreach ($hourlySalaryCalcCondMasters as $hourlySalaryCalcCondMaster): ?>
	<tr>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['SalaryTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WeekPerYear']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfWeekHour']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfWeekMinite']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['HolidayPerYear']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfDayHour']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfDayMinite']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear']), null, __('Are you sure you want to delete # %s?', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hourly Salary Calc Cond Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
