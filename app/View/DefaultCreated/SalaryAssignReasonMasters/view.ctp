<div class="salaryAssignReasonMasters view">
<h2><?php  echo __('Salary Assign Reason Master'); ?></h2>
	<dl>
		<dt><?php echo __('SalaryAssignResCD'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryAssignResName'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryAssignResShortName'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($salaryAssignReasonMaster['SalaryAssignReasonMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salary Assign Reason Master'), array('action' => 'edit', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary Assign Reason Master'), array('action' => 'delete', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD']), null, __('Are you sure you want to delete # %s?', $salaryAssignReasonMaster['SalaryAssignReasonMaster']['SalaryAssignResCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salary Assign Reason Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary Assign Reason Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
