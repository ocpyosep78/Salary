<div class="bankMasters index">
	<h2><?php echo __('Bank Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('BankMasterNo'); ?></th>
			<th><?php echo $this->Paginator->sort('BankCode'); ?></th>
			<th><?php echo $this->Paginator->sort('BankBranchCode'); ?></th>
			<th><?php echo $this->Paginator->sort('BankNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('BankBrancheName'); ?></th>
			<th><?php echo $this->Paginator->sort('BankTypeDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('BillTransPlaceNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('LocationPrefKana'); ?></th>
			<th><?php echo $this->Paginator->sort('LocationCityKana'); ?></th>
			<th><?php echo $this->Paginator->sort('Location_JP'); ?></th>
			<th><?php echo $this->Paginator->sort('StreetNum_Eng'); ?></th>
			<th><?php echo $this->Paginator->sort('StreetNum_JP'); ?></th>
			<th><?php echo $this->Paginator->sort('TelNo'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCD'); ?></th>
			<th><?php echo $this->Paginator->sort('MainBranchDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('ZenginFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('TagFlg'); ?></th>
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
	<?php foreach ($bankMasters as $bankMaster): ?>
	<tr>
		<td><?php echo h($bankMaster['BankMaster']['BankMasterNo']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BankCode']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BankBranchCode']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BankNameKana']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BankBrancheName']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BankTypeDiv']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BillTransPlaceNumber']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['LocationPrefKana']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['LocationCityKana']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['Location_JP']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['StreetNum_Eng']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['StreetNum_JP']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['TelNo']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['ZipCD']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['MainBranchDiv']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['ZenginFlg']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['TagFlg']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['BankUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($bankMaster['BankMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bankMaster['BankMaster']['BankMasterNo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bankMaster['BankMaster']['BankMasterNo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bankMaster['BankMaster']['BankMasterNo']), null, __('Are you sure you want to delete # %s?', $bankMaster['BankMaster']['BankMasterNo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bank Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
