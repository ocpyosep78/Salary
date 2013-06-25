<div class="organisationMasters index">
	<h2><?php echo __('Organisation Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('OrgCD'); ?></th>
			<th><?php echo $this->Paginator->sort('OrgName'); ?></th>
			<th><?php echo $this->Paginator->sort('OrgShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('OrgName_Hist'); ?></th>
			<th><?php echo $this->Paginator->sort('PayerDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderRightsRole'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderRightsHistName'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderRightsName'); ?></th>
			<th><?php echo $this->Paginator->sort('NoticeOrgName'); ?></th>
			<th><?php echo $this->Paginator->sort('NoticeContOrgName'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organisationMasters as $organisationMaster): ?>
	<tr>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrgCD']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrgName']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrgShortName']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrgName_Hist']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['PayerDiv']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrderRightsRole']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrderRightsHistName']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['OrderRightsName']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['NoticeOrgName']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['NoticeContOrgName']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($organisationMaster['OrganisationMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organisationMaster['OrganisationMaster']['OrgCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organisationMaster['OrganisationMaster']['OrgCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organisationMaster['OrganisationMaster']['OrgCD']), null, __('Are you sure you want to delete # %s?', $organisationMaster['OrganisationMaster']['OrgCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Organisation Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
