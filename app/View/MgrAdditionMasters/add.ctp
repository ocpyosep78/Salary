<div class="mgrAdditionMasters form">
<?php echo $this->Form->create('MgrAdditionMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Mgr Addition Master'); ?></legend>
	<?php
		echo $this->Form->input('JobGradeFrom');
		echo $this->Form->input('JobGradeTo');
		echo $this->Form->input('Number');
		echo $this->Form->input('PayrollSystemFlg');
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

		<li><?php echo $this->Html->link(__('List Mgr Addition Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
