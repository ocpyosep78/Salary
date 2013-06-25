<div class="beforeHiredTypeMasters form">
<?php echo $this->Form->create('BeforeHiredTypeMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Before Hired Type Master'); ?></legend>
	<?php
		echo $this->Form->input('BeforeHiredTypeCD');
		echo $this->Form->input('BeforeHiredTypeName');
		echo $this->Form->input('PlanHiredCatName');
		echo $this->Form->input('Remarks');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BeforeHiredTypeMaster.BeforeHiredTypeCD')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BeforeHiredTypeMaster.BeforeHiredTypeCD'))); ?></li>
		<li><?php echo $this->Html->link(__('List Before Hired Type Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
