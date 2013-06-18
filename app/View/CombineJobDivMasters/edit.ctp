<div class="combineJobDivMasters form">
<?php echo $this->Form->create('CombineJobDivMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Combine Job Div Master'); ?></legend>
	<?php
		echo $this->Form->input('CombineJobCode');
		echo $this->Form->input('CombineJobName');
		echo $this->Form->input('CombineJobShortName');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CombineJobDivMaster.CombineJobCode')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CombineJobDivMaster.CombineJobCode'))); ?></li>
		<li><?php echo $this->Html->link(__('List Combine Job Div Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
