<div class="feeAndUnionDueRateAppliedSalaryTypeMasters view">
<h2><?php  echo __('Fee And Union Due Rate Applied Salary Type Master'); ?></h2>
	<dl>
		<dt><?php echo __('RevYM'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RevYM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GroupTypeCD'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['GroupTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixedRateAmountDiv'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['FixedRateAmountDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTypeCD'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['SalaryTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fee And Union Due Rate Applied Salary Type Master'), array('action' => 'edit', $feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fee And Union Due Rate Applied Salary Type Master'), array('action' => 'delete', $feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $feeAndUnionDueRateAppliedSalaryTypeMaster['FeeAndUnionDueRateAppliedSalaryTypeMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fee And Union Due Rate Applied Salary Type Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee And Union Due Rate Applied Salary Type Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
