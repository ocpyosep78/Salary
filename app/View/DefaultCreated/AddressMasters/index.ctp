<div class="addressMasters index">
	<h2><?php echo __('Address Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('AddressMasterNo'); ?></th>
			<th><?php echo $this->Paginator->sort('TownCharCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NewAddressCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCD'); ?></th>
			<th><?php echo $this->Paginator->sort('CustomerBarcode'); ?></th>
			<th><?php echo $this->Paginator->sort('LenCustomerBarcode'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCodeInfo1'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCodeInfo2'); ?></th>
			<th><?php echo $this->Paginator->sort('InheritFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('InheritCD'); ?></th>
			<th><?php echo $this->Paginator->sort('UnPrefCode'); ?></th>
			<th><?php echo $this->Paginator->sort('PrefNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('CityNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNumberEng'); ?></th>
			<th><?php echo $this->Paginator->sort('LenPrefNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('LenCityNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('LenBlockNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('LenBlockNumberEng'); ?></th>
			<th><?php echo $this->Paginator->sort('TotalLenNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('PrefName'); ?></th>
			<th><?php echo $this->Paginator->sort('CityName'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockName'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('LenPrefName'); ?></th>
			<th><?php echo $this->Paginator->sort('LenCityName'); ?></th>
			<th><?php echo $this->Paginator->sort('LenBlockName'); ?></th>
			<th><?php echo $this->Paginator->sort('LenBlockNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('TotalLenName'); ?></th>
			<th><?php echo $this->Paginator->sort('PrefNameCharType'); ?></th>
			<th><?php echo $this->Paginator->sort('CityName1CharType'); ?></th>
			<th><?php echo $this->Paginator->sort('CityName2CharType'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockName1CharType'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockName2CharType'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNumber1CharType'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNumber2CharType'); ?></th>
			<th><?php echo $this->Paginator->sort('StreetNameFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNameFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNumberFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('PopularNameFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('EffectYM'); ?></th>
			<th><?php echo $this->Paginator->sort('InvalidYM'); ?></th>
			<th><?php echo $this->Paginator->sort('NewBlockYM'); ?></th>
			<th><?php echo $this->Paginator->sort('NameChangeYM'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCodeChangeYM'); ?></th>
			<th><?php echo $this->Paginator->sort('BlockNumberChangeYM'); ?></th>
			<th><?php echo $this->Paginator->sort('Filter'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustCD'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($addressMasters as $addressMaster): ?>
	<tr>
		<td><?php echo h($addressMaster['AddressMaster']['AddressMasterNo']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['TownCharCD']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['NewAddressCode']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['ZipCD']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['CustomerBarcode']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenCustomerBarcode']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['ZipCodeInfo1']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['ZipCodeInfo2']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['InheritFlg']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['InheritCD']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['UnPrefCode']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['PrefNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['CityNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNumberEng']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenPrefNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenCityNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenBlockNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenBlockNumberEng']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['TotalLenNameKana']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['PrefName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['CityName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNumber']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenPrefName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenCityName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenBlockName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['LenBlockNumber']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['TotalLenName']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['PrefNameCharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['CityName1CharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['CityName2CharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockName1CharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockName2CharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNumber1CharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNumber2CharType']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['StreetNameFlg']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNameFlg']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNumberFlg']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['PopularNameFlg']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['EffectYM']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['InvalidYM']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['NewBlockYM']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['NameChangeYM']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['ZipCodeChangeYM']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['BlockNumberChangeYM']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['Filter']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['AdjustCD']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($addressMaster['AddressMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $addressMaster['AddressMaster']['AddressMasterNo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $addressMaster['AddressMaster']['AddressMasterNo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $addressMaster['AddressMaster']['AddressMasterNo']), null, __('Are you sure you want to delete # %s?', $addressMaster['AddressMaster']['AddressMasterNo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Address Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
