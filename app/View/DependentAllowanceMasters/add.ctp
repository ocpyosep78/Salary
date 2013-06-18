<div class="dependentAllowanceMasters form">
<?php echo $this->Form->create('DependentAllowanceMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Dependent Allowance Master'); ?></legend>
	<?php
		echo $this->Form->input('RevYM');
		echo $this->Form->input('SalaryTypeCD');
		echo $this->Form->input('AmountPartner');
		echo $this->Form->input('AmountFirst');
		echo $this->Form->input('Amount1');
		echo $this->Form->input('Amount2');
		echo $this->Form->input('Amount3Over');
		echo $this->Form->input('AmountSpecialSum');
		echo $this->Form->input('SpecialSumStartAge');
		echo $this->Form->input('SpecialSumEndAge');
		echo $this->Form->input('AllowanceEndAge');
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

		<li><?php echo $this->Html->link(__('List Dependent Allowance Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
