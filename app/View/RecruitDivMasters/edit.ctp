<div class="recruitDivMasters form">
<?php echo $this->Form->create('RecruitDivMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recruit Div Master'); ?></legend>
	<?php
		echo $this->Form->input('RecruitDivCD');
		echo $this->Form->input('RecruitDiv');
		echo $this->Form->input('RecruitDivShortName');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecruitDivMaster.RecruitDivCD')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RecruitDivMaster.RecruitDivCD'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recruit Div Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
