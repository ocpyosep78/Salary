<div class="retirementAllowanceTables form">
<?php echo $this->Form->create('RetirementAllowanceTable'); ?>
	<fieldset>
		<legend><?php echo __('Edit Retirement Allowance Table'); ?></legend>
	<?php
		echo $this->Form->input('ServiceYears');
		echo $this->Form->input('RetirementCategory');
		echo $this->Form->input('PaymentRatio');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RetirementAllowanceTable.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RetirementAllowanceTable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Retirement Allowance Tables'), array('action' => 'index')); ?></li>
	</ul>
</div>
