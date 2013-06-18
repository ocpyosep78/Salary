<div class="personFamilyInfos form">
<?php echo $this->Form->create('PersonFamilyInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person Family Info'); ?></legend>
	<?php
		echo $this->Form->input('PersonFamilyInfoID');
		echo $this->Form->input('EmpBasicInformationID');
		echo $this->Form->input('PersonID');
		echo $this->Form->input('EmpNo');
		echo $this->Form->input('RowCounter');
		echo $this->Form->input('Relationship');
		echo $this->Form->input('Name');
		echo $this->Form->input('NameKana');
		echo $this->Form->input('Sex');
		echo $this->Form->input('BirthDate');
		echo $this->Form->input('DeathDate');
		echo $this->Form->input('SeparationFlg');
		echo $this->Form->input('HandicapDiv1');
		echo $this->Form->input('HandicapDiv2');
		echo $this->Form->input('SeparationZipCD');
		echo $this->Form->input('SeparationAddressCD');
		echo $this->Form->input('SeparationAddress');
		echo $this->Form->input('SeparationAddressDetail');
		echo $this->Form->input('SeparationAddressMemo');
		echo $this->Form->input('SeparationAddressKana');
		echo $this->Form->input('SeparationAddressDetailKata');
		echo $this->Form->input('SeparationTelNo');
		echo $this->Form->input('WorkPlaceName');
		echo $this->Form->input('WorkPlaceTelNo');
		echo $this->Form->input('TaxDeductionStartDate');
		echo $this->Form->input('TaxDeductionEndDate');
		echo $this->Form->input('DependFamStartDate');
		echo $this->Form->input('DependFamEndDate');
		echo $this->Form->input('ColaboDependDiv');
		echo $this->Form->input('ChildAllowStartDate');
		echo $this->Form->input('ChildAllowEndDate');
		echo $this->Form->input('ChildAllowDiv');
		echo $this->Form->input('ChildAllowCondStartDate');
		echo $this->Form->input('ChildAllowCondEndDate');
		echo $this->Form->input('Remarks');
		echo $this->Form->input('registered_date');
		echo $this->Form->input('registered_by');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('update_by');
		echo $this->Form->input('latest_data_flg');
		echo $this->Form->input('last_key');
		echo $this->Form->input('effective_date');
		echo $this->Form->input('expired_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonFamilyInfo.PersonFamilyInfoID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonFamilyInfo.PersonFamilyInfoID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Person Family Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
