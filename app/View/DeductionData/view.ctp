<div class="deductionData view">
<h2><?php  echo __('Deduction Datum'); ?></h2>
	<dl>
		<dt><?php echo __('DeductionYm'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeductionYm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeductionDivCD'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeductionDivCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeductionCD'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeductionCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WelfareEnrollInfoID'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['WelfareEnrollInfoID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpProcessRunID'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['EmpProcessRunID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeductionStartYm'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeductionStartYm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeductionEndYm'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeductionEndYm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanNo'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['LoanNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['LoanAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FirstRepaymentAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['FirstRepaymentAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RepaymentAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['RepaymentAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastRepaymentAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['LastRepaymentAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RepaymentCnt'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['RepaymentCnt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReminderCnt'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['ReminderCnt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HesitReminderCnt'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['HesitReminderCnt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SavingAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['SavingAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReturnAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['ReturnAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AccumAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['AccumAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HouseAccumAmount'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['HouseAccumAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeductionResultCD'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeductionResultCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($deductionDatum['DeductionDatum']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deduction Datum'), array('action' => 'edit', $deductionDatum['DeductionDatum']['DeductionYm'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deduction Datum'), array('action' => 'delete', $deductionDatum['DeductionDatum']['DeductionYm']), null, __('Are you sure you want to delete # %s?', $deductionDatum['DeductionDatum']['DeductionYm'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deduction Data'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deduction Datum'), array('action' => 'add')); ?> </li>
	</ul>
</div>
