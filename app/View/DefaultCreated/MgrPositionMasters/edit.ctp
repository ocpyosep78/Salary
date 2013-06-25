<div class="mgrPositionMasters form">
<?php echo $this->Form->create('MgrPositionMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mgr Position Master'); ?></legend>
	<?php
		echo $this->Form->input('MgrCD');
		echo $this->Form->input('MgrName');
		echo $this->Form->input('MgrShortName');
		echo $this->Form->input('registered_date');
		echo $this->Form->input('registered_by');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('updated_by');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('effective_Date');
		echo $this->Form->input('expired_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MgrPositionMaster.MgrCD')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MgrPositionMaster.MgrCD'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mgr Position Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
