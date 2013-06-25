<div class="aaaaaaaaaaaaaaaaaaaaaaaaas form">
<?php echo $this->Form->create('Aaaaaaaaaaaaaaaaaaaaaaaaa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aaaaaaaaaaaaaaaaaaaaaaaaa'); ?></legend>
	<?php
		echo $this->Form->input('EmpBasicInformationID');
		echo $this->Form->input('EmpNo');
		echo $this->Form->input('AssignOrgCD');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aaaaaaaaaaaaaaaaaaaaaaaaa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aaaaaaaaaaaaaaaaaaaaaaaaa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aaaaaaaaaaaaaaaaaaaaaaaaas'), array('action' => 'index')); ?></li>
	</ul>
</div>
