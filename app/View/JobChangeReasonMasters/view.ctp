<div class="jobChangeReasonMasters view">
<h2><?php  echo __('Job Change Reason Master'); ?></h2>
	<dl>
		<dt><?php echo __('JobChangeResCD'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobChangeResName'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobChangeResShortName'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($jobChangeReasonMaster['JobChangeReasonMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Change Reason Master'), array('action' => 'edit', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Change Reason Master'), array('action' => 'delete', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD']), null, __('Are you sure you want to delete # %s?', $jobChangeReasonMaster['JobChangeReasonMaster']['JobChangeResCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Change Reason Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Change Reason Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
