<div class="fixSalaryEmpInformations form">
<?php echo $this->Form->create('FixSalaryEmpInformation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fix Salary Emp Information'); ?></legend>
	<?php
		echo $this->Form->input('FixSalaryEmpInformationID');
		echo $this->Form->input('EmpNo');
		echo $this->Form->input('PreSalaryTableCD');
		echo $this->Form->input('FixSalaryTabCD');
		echo $this->Form->input('FixSalaryClass');
		echo $this->Form->input('FixSalaryGrade');
		echo $this->Form->input('FixSalaryStartDate');
		echo $this->Form->input('FixSalaryEndDate');
		echo $this->Form->input('FixSalaryEndReasonCD');
		echo $this->Form->input('RemarksForFixed');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FixSalaryEmpInformation.FixSalaryEmpInformationID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FixSalaryEmpInformation.FixSalaryEmpInformationID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fix Salary Emp Informations'), array('action' => 'index')); ?></li>
	</ul>
</div>