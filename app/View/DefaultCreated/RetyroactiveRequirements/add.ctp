<div class="retyroactiveRequirements form">
<?php echo $this->Form->create('RetyroactiveRequirement'); ?>
	<fieldset>
		<legend><?php echo __('Add Retyroactive Requirement'); ?></legend>
	<?php
		echo $this->Form->input('AdjustedEmpProcessRunID');
		echo $this->Form->input('ProcessStatus');
		echo $this->Form->input('RegDate');
		echo $this->Form->input('RegisteredBy');
		echo $this->Form->input('RegPgID');
		echo $this->Form->input('UpdateDate');
		echo $this->Form->input('UpdateBy');
		echo $this->Form->input('UpdatePgmID');
		echo $this->Form->input('DeleteFlg');
		echo $this->Form->input('VersionNo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Retyroactive Requirements'), array('action' => 'index')); ?></li>
	</ul>
</div>
