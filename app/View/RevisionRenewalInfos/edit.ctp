<div class="revisionRenewalInfos form">
<?php echo $this->Form->create('RevisionRenewalInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Revision Renewal Info'); ?></legend>
	<?php
		echo $this->Form->input('RevisionRenewalInfoID');
		echo $this->Form->input('FixSalaryTableRevTypeCD');
		echo $this->Form->input('RenewalDiv');
		echo $this->Form->input('RevisionFixAmount');
		echo $this->Form->input('RevisionAddAmount');
		echo $this->Form->input('RevisionRenewalDate');
		echo $this->Form->input('FixSalaryEmpInformationID');
		echo $this->Form->input('latest_data_div');
		echo $this->Form->input('registered_date');
		echo $this->Form->input('registered_pgid');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('updated_pgid');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('version_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RevisionRenewalInfo.RevisionRenewalInfoID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RevisionRenewalInfo.RevisionRenewalInfoID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Revision Renewal Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
