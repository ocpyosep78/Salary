<div class="salaryGuaranteeMasters form">
<?php echo $this->Form->create('SalaryGuaranteeMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Salary Guarantee Master'); ?></legend>
	<?php
		echo $this->Form->input('SalaryGuaranteeID');
		echo $this->Form->input('RevYMD');
		echo $this->Form->input('GuaranteeAmoTabCD');
		echo $this->Form->input('SalaryClassCD');
		echo $this->Form->input('FixedAmoAddAmounts');
		echo $this->Form->input('FixedRateAddRate');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalaryGuaranteeMaster.SalaryGuaranteeID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SalaryGuaranteeMaster.SalaryGuaranteeID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Salary Guarantee Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
