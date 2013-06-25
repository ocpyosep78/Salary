<div class="gradeAdjustMasters form">
<?php echo $this->Form->create('GradeAdjustMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Grade Adjust Master'); ?></legend>
	<?php
		echo $this->Form->input('AdhustName');
		echo $this->Form->input('CarryOverFlg');
		echo $this->Form->input('Priority');
		echo $this->Form->input('registered_date');
		echo $this->Form->input('registered_by');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('update_by');
		echo $this->Form->input('latest_data_flg');
		echo $this->Form->input('last_key');
		echo $this->Form->input('effective_date');
		echo $this->Form->input('expired_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grade Adjust Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
