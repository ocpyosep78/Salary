<div class="jobCategoryMasters view">
<h2><?php  echo __('Job Category Master'); ?></h2>
	<dl>
		<dt><?php echo __('JobDutyCD'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['JobDutyCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTypeName'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['JobTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTypeShortName'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['JobTypeShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobDutyName'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['JobDutyName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobDutyShortName'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['JobDutyShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($jobCategoryMaster['JobCategoryMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Category Master'), array('action' => 'edit', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Category Master'), array('action' => 'delete', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD']), null, __('Are you sure you want to delete # %s?', $jobCategoryMaster['JobCategoryMaster']['JobDutyCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Category Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Category Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
