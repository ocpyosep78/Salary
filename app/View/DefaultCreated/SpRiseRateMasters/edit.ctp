<div class="spRiseRateMasters form">
<?php echo $this->Form->create('SpRiseRateMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sp Rise Rate Master'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('DivMark');
		echo $this->Form->input('Rate');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SpRiseRateMaster.ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SpRiseRateMaster.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sp Rise Rate Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
