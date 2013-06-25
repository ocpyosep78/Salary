<div class="grade2ExamCanData index">
	<h2><?php echo __('Grade2 Exam Can Data'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Grade2ExamCanDataID'); ?></th>
			<th><?php echo $this->Paginator->sort('FiscalYear'); ?></th>
			<th><?php echo $this->Paginator->sort('Number'); ?></th>
			<th><?php echo $this->Paginator->sort('ExamTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('ExamDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('FamilyName'); ?></th>
			<th><?php echo $this->Paginator->sort('FirstName'); ?></th>
			<th><?php echo $this->Paginator->sort('FamilyNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('FirstNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('RegisteredName'); ?></th>
			<th><?php echo $this->Paginator->sort('RegisteredNameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('DepCD'); ?></th>
			<th><?php echo $this->Paginator->sort('DeptShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('BirthDate'); ?></th>
			<th><?php echo $this->Paginator->sort('Age'); ?></th>
			<th><?php echo $this->Paginator->sort('SexCD'); ?></th>
			<th><?php echo $this->Paginator->sort('DivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('DivName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('WkStartDateAtWard'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYears'); ?></th>
			<th><?php echo $this->Paginator->sort('PrevjobFLG'); ?></th>
			<th><?php echo $this->Paginator->sort('NewQualiFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('PreJobJudgedFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('QualificationFLG'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderedDate_JobGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('IntrocrsDoneFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('TTExempFLG'); ?></th>
			<th><?php echo $this->Paginator->sort('PunishHist'); ?></th>
			<th><?php echo $this->Paginator->sort('AbsentDays'); ?></th>
			<th><?php echo $this->Paginator->sort('EvalResult1'); ?></th>
			<th><?php echo $this->Paginator->sort('EvalResult2'); ?></th>
			<th><?php echo $this->Paginator->sort('FinalResult'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('RegDate'); ?></th>
			<th><?php echo $this->Paginator->sort('RegisteredBy'); ?></th>
			<th><?php echo $this->Paginator->sort('RegPgID'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdateBy'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdatePgmID'); ?></th>
			<th><?php echo $this->Paginator->sort('DeleteFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('VersionNo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grade2ExamCanData as $grade2ExamCanDatum): ?>
	<tr>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['Grade2ExamCanDataID']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['FiscalYear']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['Number']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['ExamTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['ExamDiv']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['FamilyName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['FirstName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['FamilyNameKana']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['FirstNameKana']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RegisteredName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RegisteredNameKana']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['DepCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['DeptShortName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['BirthDate']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['Age']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['SexCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['DivCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['DivName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['JobGradeCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['JobGradeShortName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['JobDutyCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['JobDutyShortName']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RecruitedDate']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RecruitDivCD']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['WkStartDateAtWard']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['ServiceYears']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['PrevjobFLG']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['NewQualiFlg']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['PreJobJudgedFlg']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['QualificationFLG']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['OrderedDate_JobGrade']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['IntrocrsDoneFlg']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['TTExempFLG']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['PunishHist']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['AbsentDays']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['EvalResult1']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['EvalResult2']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['FinalResult']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($grade2ExamCanDatum['Grade2ExamCanDatum']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grade2ExamCanDatum['Grade2ExamCanDatum']['Grade2ExamCanDataID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grade2ExamCanDatum['Grade2ExamCanDatum']['Grade2ExamCanDataID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grade2ExamCanDatum['Grade2ExamCanDatum']['Grade2ExamCanDataID']), null, __('Are you sure you want to delete # %s?', $grade2ExamCanDatum['Grade2ExamCanDatum']['Grade2ExamCanDataID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Grade2 Exam Can Datum'), array('action' => 'add')); ?></li>
	</ul>
</div>
