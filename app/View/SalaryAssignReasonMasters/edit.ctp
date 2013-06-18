<div class="salaryAssignReasonMasters form">
<?php echo $this->Form->create('SalaryAssignReasonMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Salary Assign Reason Master'); ?></legend>
	<?php
		echo $this->Form->input('SalaryAssignResCD');
		echo $this->Form->input('SalaryAssignResName');
		echo $this->Form->input('SalaryAssignResShortName');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalaryAssignReasonMaster.SalaryAssignResCD')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SalaryAssignReasonMaster.SalaryAssignResCD'))); ?></li>
		<li><?php echo $this->Html->link(__('List Salary Assign Reason Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
