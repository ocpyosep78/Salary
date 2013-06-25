<div class="salaryClassPassDivMasters form">
<?php echo $this->Form->create('SalaryClassPassDivMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Salary Class Pass Div Master'); ?></legend>
	<?php
		echo $this->Form->input('SalaryClassPassDivName');
		echo $this->Form->input('SalaryClassPassDivShortName');
		echo $this->Form->input('Remarks');
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

		<li><?php echo $this->Html->link(__('List Salary Class Pass Div Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
