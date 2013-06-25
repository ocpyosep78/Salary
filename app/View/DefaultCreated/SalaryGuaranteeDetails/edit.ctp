<div class="salaryGuaranteeDetails form">
<?php echo $this->Form->create('SalaryGuaranteeDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Salary Guarantee Detail'); ?></legend>
	<?php
		echo $this->Form->input('SalaryGuaranteeDetailID');
		echo $this->Form->input('SalaryGuaranteeID');
		echo $this->Form->input('GuaranteeAmoTabGrade');
		echo $this->Form->input('MonthlyAmonut');
		echo $this->Form->input('AddAllow');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalaryGuaranteeDetail.SalaryGuaranteeDetailID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SalaryGuaranteeDetail.SalaryGuaranteeDetailID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Salary Guarantee Details'), array('action' => 'index')); ?></li>
	</ul>
</div>
