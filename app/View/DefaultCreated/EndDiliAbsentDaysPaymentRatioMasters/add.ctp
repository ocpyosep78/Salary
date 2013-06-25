<div class="endDiliAbsentDaysPaymentRatioMasters form">
<?php echo $this->Form->create('EndDiliAbsentDaysPaymentRatioMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add End Dili Absent Days Payment Ratio Master'); ?></legend>
	<?php
		echo $this->Form->input('MetWardDiv');
		echo $this->Form->input('EndDiliMonPayment');
		echo $this->Form->input('EndDiligenceDiv');
		echo $this->Form->input('Number');
		echo $this->Form->input('AbsentDaysFrom');
		echo $this->Form->input('AbsentDaysTo');
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

		<li><?php echo $this->Html->link(__('List End Dili Absent Days Payment Ratio Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
