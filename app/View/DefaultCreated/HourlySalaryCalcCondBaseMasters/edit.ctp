<div class="hourlySalaryCalcCondBaseMasters form">
<?php echo $this->Form->create('HourlySalaryCalcCondBaseMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hourly Salary Calc Cond Base Master'); ?></legend>
	<?php
		echo $this->Form->input('FiscalYear');
		echo $this->Form->input('SalaryTypeCD');
		echo $this->Form->input('AllowCD');
		echo $this->Form->input('Number');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HourlySalaryCalcCondBaseMaster.FiscalYear')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HourlySalaryCalcCondBaseMaster.FiscalYear'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hourly Salary Calc Cond Base Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
