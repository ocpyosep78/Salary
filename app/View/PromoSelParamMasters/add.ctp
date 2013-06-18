<div class="promoSelParamMasters form">
<?php echo $this->Form->create('PromoSelParamMaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Promo Sel Param Master'); ?></legend>
	<?php
		echo $this->Form->input('PrSelectTypeCD');
		echo $this->Form->input('PrSelectTypeName');
		echo $this->Form->input('PrSelTypeRowCounter');
		echo $this->Form->input('PrSelectDivCD');
		echo $this->Form->input('PrSelectDivName');
		echo $this->Form->input('PrSelectDivShortName');
		echo $this->Form->input('PrSelectPatternCD');
		echo $this->Form->input('PrSelectPatternName');
		echo $this->Form->input('RecruitDivCD');
		echo $this->Form->input('JobTypeText');
		echo $this->Form->input('AgeLowerLimit');
		echo $this->Form->input('AgeUpperLimit');
		echo $this->Form->input('WdServiceYearsLwLimit');
		echo $this->Form->input('WdServiceYearsUpLimit');
		echo $this->Form->input('ServiceYearsSetName1');
		echo $this->Form->input('ServiceYearsLwLimit1');
		echo $this->Form->input('ServiceYearsUpLimit1');
		echo $this->Form->input('ServiceYearsSetName2');
		echo $this->Form->input('ServiceYearsLwLimit2');
		echo $this->Form->input('ServiceYearsUpLimit2');
		echo $this->Form->input('UnivGraduationDate');
		echo $this->Form->input('AbsentDays');
		echo $this->Form->input('ExempAquisYear');
		echo $this->Form->input('ExempValidYears');
		echo $this->Form->input('BeforeHistoryRefFlg');
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

		<li><?php echo $this->Html->link(__('List Promo Sel Param Masters'), array('action' => 'index')); ?></li>
	</ul>
</div>
