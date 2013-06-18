<div class="organisationMasters form">
<?php echo $this->Form->create('OrganisationMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Organisation Master'); ?></legend>
	<?php
		echo $this->Form->input('OrgName');
		echo $this->Form->input('OrgShortName');
		echo $this->Form->input('OrgName_Hist');
		echo $this->Form->input('PayerDiv');
		echo $this->Form->input('OrderRightsRole');
		echo $this->Form->input('OrderRightsHistName');
		echo $this->Form->input('OrderRightsName');
		echo $this->Form->input('NoticeOrgName');
		echo $this->Form->input('NoticeContOrgName');
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

		<li><?php echo $this->Html->link(__('List Organisation Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
