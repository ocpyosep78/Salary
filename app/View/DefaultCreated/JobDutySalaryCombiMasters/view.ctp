<div class="jobDutySalaryCombiMasters view">
<h2><?php  echo __('Job Duty Salary Combi Master'); ?></h2>
	<dl>
		<dt><?php echo __('JobDutyCD'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTypeName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTypeShortName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobTypeShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobCategoryName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobCategoryName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobCategoryShortName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobCategoryShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullTimeSalaryTableCD'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['FullTimeSalaryTableCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullTimeSalaryTableName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['FullTimeSalaryTableName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullTimeSalaryTableShortName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['FullTimeSalaryTableShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReappointSTCD'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['ReappointSTCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReappointSTName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['ReappointSTName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReappointSTShortName'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['ReappointSTShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Duty Salary Combi Master'), array('action' => 'edit', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Duty Salary Combi Master'), array('action' => 'delete', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD']), null, __('Are you sure you want to delete # %s?', $jobDutySalaryCombiMaster['JobDutySalaryCombiMaster']['JobDutyCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Duty Salary Combi Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Duty Salary Combi Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
