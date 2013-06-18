<div class="lGovMasters form">
<?php echo $this->Form->create('LGovMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add L Gov Master'); ?></legend>
	<?php
		echo $this->Form->input('LGovCode');
		echo $this->Form->input('LGovName');
		echo $this->Form->input('LGovNameFuri');
		echo $this->Form->input('LGovNameFuriKogaki');
		echo $this->Form->input('ZipCD');
		echo $this->Form->input('Location_JP');
		echo $this->Form->input('TelNo');
		echo $this->Form->input('BankUpdateDate');
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

		<li><?php echo $this->Html->link(__('List L Gov Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
