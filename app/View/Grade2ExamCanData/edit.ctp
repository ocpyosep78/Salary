<div class="grade2ExamCanData form">
<?php echo $this->Form->create('Grade2ExamCanDatum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grade2 Exam Can Datum'); ?></legend>
	<?php
		echo $this->Form->input('Grade2ExamCanDataID');
		echo $this->Form->input('FiscalYear');
		echo $this->Form->input('Number');
		echo $this->Form->input('ExamTypeCD');
		echo $this->Form->input('ExamDiv');
		echo $this->Form->input('FamilyName');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('FamilyNameKana');
		echo $this->Form->input('FirstNameKana');
		echo $this->Form->input('RegisteredName');
		echo $this->Form->input('RegisteredNameKana');
		echo $this->Form->input('EmpNo');
		echo $this->Form->input('DepCD');
		echo $this->Form->input('DeptShortName');
		echo $this->Form->input('BirthDate');
		echo $this->Form->input('Age');
		echo $this->Form->input('SexCD');
		echo $this->Form->input('DivCD');
		echo $this->Form->input('DivName');
		echo $this->Form->input('JobGradeCD');
		echo $this->Form->input('JobGradeShortName');
		echo $this->Form->input('JobDutyCD');
		echo $this->Form->input('JobDutyShortName');
		echo $this->Form->input('RecruitedDate');
		echo $this->Form->input('RecruitDivCD');
		echo $this->Form->input('WkStartDateAtWard');
		echo $this->Form->input('ServiceYears');
		echo $this->Form->input('PrevjobFLG');
		echo $this->Form->input('NewQualiFlg');
		echo $this->Form->input('PreJobJudgedFlg');
		echo $this->Form->input('QualificationFLG');
		echo $this->Form->input('OrderedDate_JobGrade');
		echo $this->Form->input('IntrocrsDoneFlg');
		echo $this->Form->input('TTExempFLG');
		echo $this->Form->input('PunishHist');
		echo $this->Form->input('AbsentDays');
		echo $this->Form->input('EvalResult1');
		echo $this->Form->input('EvalResult2');
		echo $this->Form->input('FinalResult');
		echo $this->Form->input('Remarks');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grade2ExamCanDatum.Grade2ExamCanDataID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grade2ExamCanDatum.Grade2ExamCanDataID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grade2 Exam Can Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
