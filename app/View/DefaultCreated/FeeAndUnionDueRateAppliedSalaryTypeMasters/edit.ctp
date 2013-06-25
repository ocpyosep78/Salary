<div class="feeAndUnionDueRateAppliedSalaryTypeMasters form">
<?php echo $this->Form->create('FeeAndUnionDueRateAppliedSalaryTypeMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fee And Union Due Rate Applied Salary Type Master'); ?></legend>
	<?php
		echo $this->Form->input('RevYM');
		echo $this->Form->input('GroupTypeCD');
		echo $this->Form->input('FixedRateAmountDiv');
		echo $this->Form->input('SalaryTypeCD');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FeeAndUnionDueRateAppliedSalaryTypeMaster.RevYM')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FeeAndUnionDueRateAppliedSalaryTypeMaster.RevYM'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fee And Union Due Rate Applied Salary Type Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
