<div class="examTypeCDMasters view">
<h2><?php  echo __('Exam Type C D Master'); ?></h2>
	<dl>
		<dt><?php echo __('ExamTypeCD'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExamTypeName'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['ExamTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExamTypeShortName'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['ExamTypeShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($examTypeCDMaster['ExamTypeCDMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exam Type C D Master'), array('action' => 'edit', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exam Type C D Master'), array('action' => 'delete', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD']), null, __('Are you sure you want to delete # %s?', $examTypeCDMaster['ExamTypeCDMaster']['ExamTypeCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Type C D Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Type C D Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
