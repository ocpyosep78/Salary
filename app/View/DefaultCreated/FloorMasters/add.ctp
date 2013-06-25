<div class="floorMasters form">
<?php echo $this->Form->create('FloorMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Floor Master'); ?></legend>
	<?php
		echo $this->Form->input('FloorName');
		echo $this->Form->input('FloorShortName');
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

		<li><?php echo $this->Html->link(__('List Floor Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
