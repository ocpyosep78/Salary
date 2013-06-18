<div class="salaryGuaranteeDetails view">
<h2><?php  echo __('Salary Guarantee Detail'); ?></h2>
	<dl>
		<dt><?php echo __('SalaryGuaranteeDetailID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryGuaranteeID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GuaranteeAmoTabGrade'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['GuaranteeAmoTabGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyAmonut'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['MonthlyAmonut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddAllow'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['AddAllow']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeDetail['SalaryGuaranteeDetail']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salary Guarantee Detail'), array('action' => 'edit', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary Guarantee Detail'), array('action' => 'delete', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID']), null, __('Are you sure you want to delete # %s?', $salaryGuaranteeDetail['SalaryGuaranteeDetail']['SalaryGuaranteeDetailID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salary Guarantee Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary Guarantee Detail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
