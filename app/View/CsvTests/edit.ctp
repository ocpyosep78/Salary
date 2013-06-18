<div class="csvTests form">
<?php echo $this->Form->create('CsvTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Csv Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('SexDiv');
		echo $this->Form->input('EmpNo');
		echo $this->Form->input('DepCD');
		echo $this->Form->input('JobDutyCD');
		echo $this->Form->input('LocalCD');
		echo $this->Form->input('EmpDiv');
		echo $this->Form->input('PayerDiv');
		echo $this->Form->input('CouponPaidDiv');
		echo $this->Form->input('PaidCouponNum');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CsvTest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CsvTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Csv Tests'), array('action' => 'index')); ?></li>
	</ul>
</div>
