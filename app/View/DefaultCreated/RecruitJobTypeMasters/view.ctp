<div class="recruitJobTypeMasters view">
<h2><?php  echo __('Recruit Job Type Master'); ?></h2>
	<dl>
		<dt><?php echo __('RecruitJobType'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['RecruitJobType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitJobTypeName'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['RecruitJobTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitJobTypeShortName'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['RecruitJobTypeShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($recruitJobTypeMaster['RecruitJobTypeMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recruit Job Type Master'), array('action' => 'edit', $recruitJobTypeMaster['RecruitJobTypeMaster']['RecruitJobType'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recruit Job Type Master'), array('action' => 'delete', $recruitJobTypeMaster['RecruitJobTypeMaster']['RecruitJobType']), null, __('Are you sure you want to delete # %s?', $recruitJobTypeMaster['RecruitJobTypeMaster']['RecruitJobType'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recruit Job Type Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recruit Job Type Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
