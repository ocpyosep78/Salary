<div class="fixSalaryEmpInformations view">
<h2><?php  echo __('Fix Salary Emp Information'); ?></h2>
	<dl>
		<dt><?php echo __('FixSalaryEmpInformationID'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpNo'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['EmpNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PreSalaryTableCD'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['PreSalaryTableCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryTabCD'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryTabCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryClass'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryClass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryGrade'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryStartDate'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryStartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryEndDate'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryEndReasonCD'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEndReasonCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RemarksForFixed'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['RemarksForFixed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($fixSalaryEmpInformation['FixSalaryEmpInformation']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fix Salary Emp Information'), array('action' => 'edit', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fix Salary Emp Information'), array('action' => 'delete', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID']), null, __('Are you sure you want to delete # %s?', $fixSalaryEmpInformation['FixSalaryEmpInformation']['FixSalaryEmpInformationID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fix Salary Emp Informations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fix Salary Emp Information'), array('action' => 'add')); ?> </li>
	</ul>
</div>
