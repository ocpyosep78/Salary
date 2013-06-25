<div class="revisionRenewalInfos index">
	<h2><?php echo __('Revision Renewal Infos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RevisionRenewalInfoID'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryTableRevTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RenewalDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('RevisionFixAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('RevisionAddAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('RevisionRenewalDate'); ?></th>
			<th><?php echo $this->Paginator->sort('FixSalaryEmpInformationID'); ?></th>
			<th><?php echo $this->Paginator->sort('latest_data_div'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_pgid'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_pgid'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('version_no'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($revisionRenewalInfos as $revisionRenewalInfo): ?>
	<tr>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['FixSalaryTableRevTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RenewalDiv']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionFixAmount']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionAddAmount']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalDate']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['FixSalaryEmpInformationID']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['latest_data_div']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['registered_pgid']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['updated_pgid']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['version_no']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID']), null, __('Are you sure you want to delete # %s?', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Revision Renewal Info'), array('action' => 'add')); ?></li>
	</ul>
</div>
