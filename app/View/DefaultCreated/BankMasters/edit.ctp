<div class="bankMasters form">
<?php echo $this->Form->create('BankMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bank Master'); ?></legend>
	<?php
		echo $this->Form->input('BankMasterNo');
		echo $this->Form->input('BankCode');
		echo $this->Form->input('BankBranchCode');
		echo $this->Form->input('BankNameKana');
		echo $this->Form->input('BankBrancheName');
		echo $this->Form->input('BankTypeDiv');
		echo $this->Form->input('BillTransPlaceNumber');
		echo $this->Form->input('LocationPrefKana');
		echo $this->Form->input('LocationCityKana');
		echo $this->Form->input('Location_JP');
		echo $this->Form->input('StreetNum_Eng');
		echo $this->Form->input('StreetNum_JP');
		echo $this->Form->input('TelNo');
		echo $this->Form->input('ZipCD');
		echo $this->Form->input('MainBranchDiv');
		echo $this->Form->input('ZenginFlg');
		echo $this->Form->input('TagFlg');
		echo $this->Form->input('BankUpdateDate');
		echo $this->Form->input('registered_date');
		echo $this->Form->input('registered_by');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('updated_by');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('effective_date');
		echo $this->Form->input('expired_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BankMaster.BankMasterNo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BankMaster.BankMasterNo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bank Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
