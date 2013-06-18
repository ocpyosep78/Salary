<div class="spRiseCanData index">
	<h2><?php echo __('Sp Rise Can Data'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FiscalYear'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('FamilyName'); ?></th>
			<th><?php echo $this->Paginator->sort('FirstName'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('DepCD'); ?></th>
			<th><?php echo $this->Paginator->sort('DeptShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('BirthDate'); ?></th>
			<th><?php echo $this->Paginator->sort('SexCD'); ?></th>
			<th><?php echo $this->Paginator->sort('Age'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobGradeShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobDutyShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('GabageEmpFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderedDate_JobGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('RetiredReasonCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RetiredDate'); ?></th>
			<th><?php echo $this->Paginator->sort('DivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('DivName'); ?></th>
			<th><?php echo $this->Paginator->sort('ClasifiedDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryClassCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryGradeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SalaryGuaranteeFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('TableOnGuarantTable'); ?></th>
			<th><?php echo $this->Paginator->sort('ClassOnGuarantTable'); ?></th>
			<th><?php echo $this->Paginator->sort('GradeOnGuarantTable'); ?></th>
			<th><?php echo $this->Paginator->sort('DistDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PromoTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('ExamTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('ExamPassedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('RecomCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RecomDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('PayRiseDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PayRiseGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('PunishGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('AgeRestGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('AbsPunishGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('RecalcFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustType1CD'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustUsage1'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustRemain1'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustType2CD'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustUsage2'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustRemain2'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustType3CD'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustUsage3'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustRemain3'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustType4CD'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustUsage4'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustRemain4'); ?></th>
			<th><?php echo $this->Paginator->sort('RiseFinalDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('RiseFinalGrade'); ?></th>
			<th><?php echo $this->Paginator->sort('NewSalaryTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NewSalaryClassCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NewSalaryGradeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NewGuaranteeFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('NewGuarantTableCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NewGuarantClassCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NewGuarantGradeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('RiseReasonCD'); ?></th>
			<th><?php echo $this->Paginator->sort('ReturningProcess'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks_PR'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th><?php echo $this->Paginator->sort('latest_data_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('last_key'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($spRiseCanData as $spRiseCanDatum): ?>
	<tr>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['ID']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['FiscalYear']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['CreatedMonth']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['FamilyName']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['FirstName']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['DepCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['DeptShortName']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['BirthDate']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['SexCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['Age']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RecruitedDate']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['JobGradeCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['JobGradeShortName']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['JobDutyCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['JobDutyShortName']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['GabageEmpFlg']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['EmpDivCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['OrderedDate_JobGrade']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RetiredReasonCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RetiredDate']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['DivCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['DivName']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['ClasifiedDiv']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['SalaryTableCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['SalaryClassCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['SalaryGradeCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['SalaryGuaranteeFlg']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['TableOnGuarantTable']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['ClassOnGuarantTable']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['GradeOnGuarantTable']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['DistDivCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['PromoTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['ExamTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['ExamPassedDate']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RecomCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RecomDiv']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['PayRiseDivCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['PayRiseGrade']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['PunishGrade']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AgeRestGrade']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AbsPunishGrade']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RecalcFlg']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustType1CD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustUsage1']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustRemain1']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustType2CD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustUsage2']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustRemain2']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustType3CD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustUsage3']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustRemain3']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustType4CD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustUsage4']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['AdjustRemain4']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RiseFinalDiv']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RiseFinalGrade']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewSalaryTableCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewSalaryClassCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewSalaryGradeCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewGuaranteeFlg']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewGuarantTableCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewGuarantClassCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['NewGuarantGradeCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['RiseReasonCD']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['ReturningProcess']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['Remarks_PR']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['latest_data_flg']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['last_key']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($spRiseCanDatum['SpRiseCanDatum']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $spRiseCanDatum['SpRiseCanDatum']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $spRiseCanDatum['SpRiseCanDatum']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $spRiseCanDatum['SpRiseCanDatum']['ID']), null, __('Are you sure you want to delete # %s?', $spRiseCanDatum['SpRiseCanDatum']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sp Rise Can Datum'), array('action' => 'add')); ?></li>
	</ul>
</div>
