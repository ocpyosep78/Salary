<div class="recruitingOrgMasters index">
	<h2><?php echo __('Recruiting Org Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RecruitingOrgCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitingOrgName'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitingOrgShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recruitingOrgMasters as $recruitingOrgMaster): ?>
	<tr>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgName']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgShortName']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD']), null, __('Are you sure you want to delete # %s?', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recruiting Org Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
