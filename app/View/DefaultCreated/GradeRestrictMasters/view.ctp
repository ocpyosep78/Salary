<div class="gradeRestrictMasters view">
<h2><?php  echo __('Grade Restrict Master'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PunishReasonCD'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['PunishReasonCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PunishReasonName'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['PunishReasonName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RestrictGrade'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['RestrictGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['update_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latest Data Flg'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['latest_data_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Key'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['last_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($gradeRestrictMaster['GradeRestrictMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade Restrict Master'), array('action' => 'edit', $gradeRestrictMaster['GradeRestrictMaster']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade Restrict Master'), array('action' => 'delete', $gradeRestrictMaster['GradeRestrictMaster']['ID']), null, __('Are you sure you want to delete # %s?', $gradeRestrictMaster['GradeRestrictMaster']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Restrict Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Restrict Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
