<div class="examTypeCDMasters index">
	<h2><?php echo __('Exam Type C D Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ExamTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('ExamTypeName'); ?></th>
			<th><?php echo $this->Paginator->sort('ExamTypeShortName'); ?></th>
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
	<?php foreach ($examTypeCDMasters as $examTypeCDMaster): ?>
	<tr>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['ExamTypeName']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['ExamTypeShortName']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($examTypeCDMaster['ExamTypeCDMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD']), null, __('Are you sure you want to delete # %s?', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Exam Type C D Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
