<div class="dependentRelativesBasics form">
<?php echo $this->Form->create('DependentRelativesBasic'); ?>
	<fieldset>
		<legend><?php echo __('Add Dependent Relatives Basic'); ?></legend>
	<?php
		echo $this->Form->input('PersonID');
		echo $this->Form->input('Relationship');
		echo $this->Form->input('Name');
		echo $this->Form->input('NameKana');
		echo $this->Form->input('Gender');
		echo $this->Form->input('DateOfBirth');
		echo $this->Form->input('DateOfDeath');
		echo $this->Form->input('LiveTogetherDiv');
		echo $this->Form->input('SustainedBySpouseFlg');
		echo $this->Form->input('DependentRelativeAllowanceFlag');
		echo $this->Form->input('DependentDeductionFlag');
		echo $this->Form->input('ChildAllowanceFlag');
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

		<li><?php echo $this->Html->link(__('List Dependent Relatives Basics'), array('action' => 'index')); ?></li>
	</ul>
</div>
