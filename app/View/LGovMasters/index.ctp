<div class="lGovMasters index">
	<h2><?php echo __('L Gov Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('LGovMasterNo'); ?></th>
			<th><?php echo $this->Paginator->sort('LGovCode'); ?></th>
			<th><?php echo $this->Paginator->sort('LGovName'); ?></th>
			<th><?php echo $this->Paginator->sort('LGovNameFuri'); ?></th>
			<th><?php echo $this->Paginator->sort('LGovNameFuriKogaki'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCD'); ?></th>
			<th><?php echo $this->Paginator->sort('Location_JP'); ?></th>
			<th><?php echo $this->Paginator->sort('TelNo'); ?></th>
			<th><?php echo $this->Paginator->sort('BankUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lGovMasters as $lGovMaster): ?>
	<tr>
		<td><?php echo h($lGovMaster['LGovMaster']['LGovMasterNo']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['LGovCode']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['LGovName']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['LGovNameFuri']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['LGovNameFuriKogaki']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['ZipCD']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['Location_JP']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['TelNo']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['BankUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($lGovMaster['LGovMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lGovMaster['LGovMaster']['LGovMasterNo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lGovMaster['LGovMaster']['LGovMasterNo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lGovMaster['LGovMaster']['LGovMasterNo']), null, __('Are you sure you want to delete # %s?', $lGovMaster['LGovMaster']['LGovMasterNo'])); ?>
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
		<li><?php echo $this->Html->link(__('New L Gov Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
