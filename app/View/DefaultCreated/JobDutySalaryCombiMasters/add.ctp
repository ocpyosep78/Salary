<div class="jobDutySalaryCombiMasters form">
<?php echo $this->Form->create('JobDutySalaryCombiMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Job Duty Salary Combi Master'); ?></legend>
	<?php
		echo $this->Form->input('JobTypeName');
		echo $this->Form->input('JobTypeShortName');
		echo $this->Form->input('JobCategoryName');
		echo $this->Form->input('JobCategoryShortName');
		echo $this->Form->input('FullTimeSalaryTableCD');
		echo $this->Form->input('FullTimeSalaryTableName');
		echo $this->Form->input('FullTimeSalaryTableShortName');
		echo $this->Form->input('ReappointSTCD');
		echo $this->Form->input('ReappointSTName');
		echo $this->Form->input('ReappointSTShortName');
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

		<li><?php echo $this->Html->link(__('List Job Duty Salary Combi Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
