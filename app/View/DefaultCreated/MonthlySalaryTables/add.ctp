<div class="monthlySalaryTables form">
<?php echo $this->Form->create('MonthlySalaryTable'); ?>
	<fieldset>
		<legend><?php echo __('Add Monthly Salary Table'); ?></legend>
	<?php
		echo $this->Form->input('EmpDiv');
		echo $this->Form->input('SalaryTableCD');
		echo $this->Form->input('SalaryClass');
		echo $this->Form->input('SalaryGrade');
		echo $this->Form->input('OtherCategory');
		echo $this->Form->input('PaymentAmount');
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

		<li><?php echo $this->Html->link(__('List Monthly Salary Tables'), array('action' => 'index')); ?></li>
	</ul>
</div>
