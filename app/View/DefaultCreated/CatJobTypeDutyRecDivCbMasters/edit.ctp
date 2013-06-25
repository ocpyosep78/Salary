<div class="catJobTypeDutyRecDivCbMasters form">
<?php echo $this->Form->create('CatJobTypeDutyRecDivCbMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cat Job Type Duty Rec Div Cb Master'); ?></legend>
	<?php
		echo $this->Form->input('CatJobTypeDutyRecDivCbMasterID');
		echo $this->Form->input('RecruitDivCD');
		echo $this->Form->input('RecruitDiv');
		echo $this->Form->input('JobTypeCD');
		echo $this->Form->input('JobTypeName');
		echo $this->Form->input('JobDutyCD');
		echo $this->Form->input('JobCategoryName');
		echo $this->Form->input('ExamTypeCD');
		echo $this->Form->input('ExamTypeName');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CatJobTypeDutyRecDivCbMaster.CatJobTypeDutyRecDivCbMasterID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CatJobTypeDutyRecDivCbMaster.CatJobTypeDutyRecDivCbMasterID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cat Job Type Duty Rec Div Cb Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
