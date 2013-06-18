<div class="jobCategoryMasters form">
<?php echo $this->Form->create('JobCategoryMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Job Category Master'); ?></legend>
	<?php
		echo $this->Form->input('JobTypeName');
		echo $this->Form->input('JobTypeShortName');
		echo $this->Form->input('JobDutyName');
		echo $this->Form->input('JobDutyShortName');
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

		<li><?php echo $this->Html->link(__('List Job Category Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
