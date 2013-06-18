<div class="dependentAllowanceMasters view">
<h2><?php  echo __('Dependent Allowance Master'); ?></h2>
	<dl>
		<dt><?php echo __('DependentAllowanceMasterID'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevYM'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RevYM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTypeCD'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['SalaryTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmountPartner'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AmountPartner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmountFirst'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AmountFirst']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount1'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['Amount1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount2'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['Amount2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount3Over'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['Amount3Over']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmountSpecialSum'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AmountSpecialSum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpecialSumStartAge'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['SpecialSumStartAge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpecialSumEndAge'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['SpecialSumEndAge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AllowanceEndAge'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['AllowanceEndAge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($dependentAllowanceMaster['DependentAllowanceMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependent Allowance Master'), array('action' => 'edit', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependent Allowance Master'), array('action' => 'delete', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID']), null, __('Are you sure you want to delete # %s?', $dependentAllowanceMaster['DependentAllowanceMaster']['DependentAllowanceMasterID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependent Allowance Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependent Allowance Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
