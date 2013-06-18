<div class="deductionData form">
<?php echo $this->Form->create('DeductionDatum'); ?>
	<fieldset>
		<legend><?php echo __('Add Deduction Datum'); ?></legend>
	<?php
		echo $this->Form->input('DeductionDivCD');
		echo $this->Form->input('DeductionCD');
		echo $this->Form->input('WelfareEnrollInfoID');
		echo $this->Form->input('EmpProcessRunID');
		echo $this->Form->input('DeductionStartYm');
		echo $this->Form->input('DeductionEndYm');
		echo $this->Form->input('LoanNo');
		echo $this->Form->input('LoanAmount');
		echo $this->Form->input('FirstRepaymentAmount');
		echo $this->Form->input('RepaymentAmount');
		echo $this->Form->input('LastRepaymentAmount');
		echo $this->Form->input('RepaymentCnt');
		echo $this->Form->input('ReminderCnt');
		echo $this->Form->input('HesitReminderCnt');
		echo $this->Form->input('SavingAmount');
		echo $this->Form->input('ReturnAmount');
		echo $this->Form->input('AccumAmount');
		echo $this->Form->input('HouseAccumAmount');
		echo $this->Form->input('DeductionResultCD');
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

		<li><?php echo $this->Html->link(__('List Deduction Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
