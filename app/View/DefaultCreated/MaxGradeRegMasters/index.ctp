<div class="maxGradeRegMasters index">
	<h2><?php echo __('Max Grade Reg Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTableName'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryClassCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryGradeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th><?php echo $this->Paginator->sort('latest_data_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('last_key'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($maxGradeRegMasters as $maxGradeRegMaster): ?>
	<tr>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['ID']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryTableName']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryTableCD']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryClassCD']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryGradeCD']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['latest_data_flg']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['last_key']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $maxGradeRegMaster['MaxGradeRegMaster']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $maxGradeRegMaster['MaxGradeRegMaster']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $maxGradeRegMaster['MaxGradeRegMaster']['ID']), null, __('Are you sure you want to delete # %s?', $maxGradeRegMaster['MaxGradeRegMaster']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Max Grade Reg Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
