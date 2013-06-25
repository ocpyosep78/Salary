<div class="recruitDivMasters index">
	<h2><?php echo __('Recruit Div Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RecruitDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitDivShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recruitDivMasters as $recruitDivMaster): ?>
	<tr>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['RecruitDivCD']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['RecruitDiv']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['RecruitDivShortName']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($recruitDivMaster['RecruitDivMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD']), null, __('Are you sure you want to delete # %s?', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recruit Div Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
