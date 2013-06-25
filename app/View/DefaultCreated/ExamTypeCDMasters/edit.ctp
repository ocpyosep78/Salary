<div class="examTypeCDMasters form">
<?php echo $this->Form->create('ExamTypeCDMaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exam Type C D Master'); ?></legend>
	<?php
		echo $this->Form->input('ExamTypeCD');
		echo $this->Form->input('ExamTypeName');
		echo $this->Form->input('ExamTypeShortName');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExamTypeCDMaster.ExamTypeCD')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ExamTypeCDMaster.ExamTypeCD'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exam Type C D Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
