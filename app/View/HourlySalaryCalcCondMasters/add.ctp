<div class="hourlySalaryCalcCondMasters form">
<?php echo $this->Form->create('HourlySalaryCalcCondMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Hourly Salary Calc Cond Master'); ?></legend>
	<?php
		echo $this->Form->input('SalaryTypeCD');
		echo $this->Form->input('WeekPerYear');
		echo $this->Form->input('WorkingTimesOfWeekHour');
		echo $this->Form->input('WorkingTimesOfWeekMinite');
		echo $this->Form->input('HolidayPerYear');
		echo $this->Form->input('WorkingTimesOfDayHour');
		echo $this->Form->input('WorkingTimesOfDayMinite');
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

		<li><?php echo $this->Html->link(__('List Hourly Salary Calc Cond Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
