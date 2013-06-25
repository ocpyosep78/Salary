<div class="gradeRestrictMasters form">
<?php echo $this->Form->create('GradeRestrictMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grade Restrict Master'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('PunishReasonCD');
		echo $this->Form->input('PunishReasonName');
		echo $this->Form->input('RestrictGrade');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GradeRestrictMaster.ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GradeRestrictMaster.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grade Restrict Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
