<div class="gradeRestrictMasters index">
	<h2><?php echo __('Grade Restrict Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PunishReasonCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PunishReasonName'); ?></th>
			<th><?php echo $this->Paginator->sort('RestrictGrade'); ?></th>
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
	<?php foreach ($gradeRestrictMasters as $gradeRestrictMaster): ?>
	<tr>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['ID']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['PunishReasonCD']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['PunishReasonName']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['RestrictGrade']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['latest_data_flg']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['last_key']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($gradeRestrictMaster['GradeRestrictMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gradeRestrictMaster['GradeRestrictMaster']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gradeRestrictMaster['GradeRestrictMaster']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gradeRestrictMaster['GradeRestrictMaster']['ID']), null, __('Are you sure you want to delete # %s?', $gradeRestrictMaster['GradeRestrictMaster']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grade Restrict Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
