<div class="spRiseCanData form">
<?php echo $this->Form->create('SpRiseCanDatum'); ?>
	<fieldset>
		<legend><?php echo __('Add Sp Rise Can Datum'); ?></legend>
	<?php
		echo $this->Form->input('FiscalYear');
		echo $this->Form->input('CreatedMonth');
		echo $this->Form->input('FamilyName');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('EmpNo');
		echo $this->Form->input('DepCD');
		echo $this->Form->input('DeptShortName');
		echo $this->Form->input('BirthDate');
		echo $this->Form->input('SexCD');
		echo $this->Form->input('Age');
		echo $this->Form->input('RecruitedDate');
		echo $this->Form->input('JobGradeCD');
		echo $this->Form->input('JobGradeShortName');
		echo $this->Form->input('JobDutyCD');
		echo $this->Form->input('JobDutyShortName');
		echo $this->Form->input('GabageEmpFlg');
		echo $this->Form->input('EmpDivCD');
		echo $this->Form->input('OrderedDate_JobGrade');
		echo $this->Form->input('RetiredReasonCD');
		echo $this->Form->input('RetiredDate');
		echo $this->Form->input('DivCD');
		echo $this->Form->input('DivName');
		echo $this->Form->input('ClasifiedDiv');
		echo $this->Form->input('SalaryTableCD');
		echo $this->Form->input('SalaryClassCD');
		echo $this->Form->input('SalaryGradeCD');
		echo $this->Form->input('SalaryGuaranteeFlg');
		echo $this->Form->input('TableOnGuarantTable');
		echo $this->Form->input('ClassOnGuarantTable');
		echo $this->Form->input('GradeOnGuarantTable');
		echo $this->Form->input('DistDivCD');
		echo $this->Form->input('PromoTypeCD');
		echo $this->Form->input('ExamTypeCD');
		echo $this->Form->input('ExamPassedDate');
		echo $this->Form->input('RecomCD');
		echo $this->Form->input('RecomDiv');
		echo $this->Form->input('PayRiseDivCD');
		echo $this->Form->input('PayRiseGrade');
		echo $this->Form->input('PunishGrade');
		echo $this->Form->input('AgeRestGrade');
		echo $this->Form->input('AbsPunishGrade');
		echo $this->Form->input('RecalcFlg');
		echo $this->Form->input('AdjustType1CD');
		echo $this->Form->input('AdjustUsage1');
		echo $this->Form->input('AdjustRemain1');
		echo $this->Form->input('AdjustType2CD');
		echo $this->Form->input('AdjustUsage2');
		echo $this->Form->input('AdjustRemain2');
		echo $this->Form->input('AdjustType3CD');
		echo $this->Form->input('AdjustUsage3');
		echo $this->Form->input('AdjustRemain3');
		echo $this->Form->input('AdjustType4CD');
		echo $this->Form->input('AdjustUsage4');
		echo $this->Form->input('AdjustRemain4');
		echo $this->Form->input('RiseFinalDiv');
		echo $this->Form->input('RiseFinalGrade');
		echo $this->Form->input('NewSalaryTableCD');
		echo $this->Form->input('NewSalaryClassCD');
		echo $this->Form->input('NewSalaryGradeCD');
		echo $this->Form->input('NewGuaranteeFlg');
		echo $this->Form->input('NewGuarantTableCD');
		echo $this->Form->input('NewGuarantClassCD');
		echo $this->Form->input('NewGuarantGradeCD');
		echo $this->Form->input('RiseReasonCD');
		echo $this->Form->input('ReturningProcess');
		echo $this->Form->input('Remarks_PR');
		echo $this->Form->input('registered_date');
		echo $this->Form->input('registered_by');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('update_by');
		echo $this->Form->input('latest_data_flg');
		echo $this->Form->input('last_key');
		echo $this->Form->input('effective_date');
		echo $this->Form->input('expired_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sp Rise Can Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
