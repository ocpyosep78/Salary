<div class="ctKengenMenus form">
<?php echo $this->Form->create('CtKengenMenu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ct Kengen Menu'); ?></legend>
	<?php
		echo $this->Form->input('CompetenceCD');
		echo $this->Form->input('MenuPrintID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CtKengenMenu.CompetenceCD')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CtKengenMenu.CompetenceCD'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ct Kengen Menus'), array('action' => 'index')); ?></li>
	</ul>
</div>
