<div class="dependentRelativesTaxdeductions form">
<?php echo $this->Form->create('DependentRelativesTaxdeduction'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dependent Relatives Taxdeduction'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('CertifiedDate');
		echo $this->Form->input('DependentRelativesID');
		echo $this->Form->input('SeparationAddress');
		echo $this->Form->input('RearingAllowanceReceivingFlag');
		echo $this->Form->input('TaxDeductionContinueFlag');
		echo $this->Form->input('DependentsOnTaxStartMonth');
		echo $this->Form->input('DependentsOnTaxEndMonth');
		echo $this->Form->input('MinorsFlag');
		echo $this->Form->input('ElderlyFlag');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DependentRelativesTaxdeduction.ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DependentRelativesTaxdeduction.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dependent Relatives Taxdeductions'), array('action' => 'index')); ?></li>
	</ul>
</div>
