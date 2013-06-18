<div class="dependentRelativesAllowances form">
<?php echo $this->Form->create('DependentRelativesAllowance'); ?>
	<fieldset>
		<legend><?php echo __('Add Dependent Relatives Allowance'); ?></legend>
	<?php
		echo $this->Form->input('CertifiedDate');
		echo $this->Form->input('DependentRelativesID');
		echo $this->Form->input('Occupation');
		echo $this->Form->input('AnnualIncome');
		echo $this->Form->input('ChallengedDiv');
		echo $this->Form->input('MovementReason');
		echo $this->Form->input('KindOfRelatonship');
		echo $this->Form->input('AllowanceStartMonth');
		echo $this->Form->input('AllowanceEndMonth');
		echo $this->Form->input('CoDependentsDiv');
		echo $this->Form->input('TaxDeductionDiv');
		echo $this->Form->input('SpoutDiv');
		echo $this->Form->input('PlaceOfEmploymentDiv');
		echo $this->Form->input('WardOffice');
		echo $this->Form->input('RegDate');
		echo $this->Form->input('RegisteredBy');
		echo $this->Form->input('RegPgID');
		echo $this->Form->input('UpdateDate');
		echo $this->Form->input('UpdateBy');
		echo $this->Form->input('UpdatePgmID');
		echo $this->Form->input('DeleteFlg');
		echo $this->Form->input('VersionNo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dependent Relatives Allowances'), array('action' => 'index')); ?></li>
	</ul>
</div>
