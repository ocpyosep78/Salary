<div class="ctMenuChohyos form">
<?php echo $this->Form->create('CtMenuChohyo'); ?>
	<fieldset>
		<legend><?php echo __('Add Ct Menu Chohyo'); ?></legend>
	<?php
		echo $this->Form->input('AccessFlg');
		echo $this->Form->input('OldNameFlg');
		echo $this->Form->input('PopularNameFlg');
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

		<li><?php echo $this->Html->link(__('List Ct Menu Chohyos'), array('action' => 'index')); ?></li>
	</ul>
</div>
