<div class="addressMasters form">
<?php echo $this->Form->create('AddressMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Address Master'); ?></legend>
	<?php
		echo $this->Form->input('TownCharCD');
		echo $this->Form->input('NewAddressCode');
		echo $this->Form->input('ZipCD');
		echo $this->Form->input('CustomerBarcode');
		echo $this->Form->input('LenCustomerBarcode');
		echo $this->Form->input('ZipCodeInfo1');
		echo $this->Form->input('ZipCodeInfo2');
		echo $this->Form->input('InheritFlg');
		echo $this->Form->input('InheritCD');
		echo $this->Form->input('UnPrefCode');
		echo $this->Form->input('PrefNameKana');
		echo $this->Form->input('CityNameKana');
		echo $this->Form->input('BlockNameKana');
		echo $this->Form->input('BlockNumberEng');
		echo $this->Form->input('LenPrefNameKana');
		echo $this->Form->input('LenCityNameKana');
		echo $this->Form->input('LenBlockNameKana');
		echo $this->Form->input('LenBlockNumberEng');
		echo $this->Form->input('TotalLenNameKana');
		echo $this->Form->input('PrefName');
		echo $this->Form->input('CityName');
		echo $this->Form->input('BlockName');
		echo $this->Form->input('BlockNumber');
		echo $this->Form->input('LenPrefName');
		echo $this->Form->input('LenCityName');
		echo $this->Form->input('LenBlockName');
		echo $this->Form->input('LenBlockNumber');
		echo $this->Form->input('TotalLenName');
		echo $this->Form->input('PrefNameCharType');
		echo $this->Form->input('CityName1CharType');
		echo $this->Form->input('CityName2CharType');
		echo $this->Form->input('BlockName1CharType');
		echo $this->Form->input('BlockName2CharType');
		echo $this->Form->input('BlockNumber1CharType');
		echo $this->Form->input('BlockNumber2CharType');
		echo $this->Form->input('StreetNameFlg');
		echo $this->Form->input('BlockNameFlg');
		echo $this->Form->input('BlockNumberFlg');
		echo $this->Form->input('PopularNameFlg');
		echo $this->Form->input('EffectYM');
		echo $this->Form->input('InvalidYM');
		echo $this->Form->input('NewBlockYM');
		echo $this->Form->input('NameChangeYM');
		echo $this->Form->input('ZipCodeChangeYM');
		echo $this->Form->input('BlockNumberChangeYM');
		echo $this->Form->input('Filter');
		echo $this->Form->input('AdjustCD');
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

		<li><?php echo $this->Html->link(__('List Address Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
