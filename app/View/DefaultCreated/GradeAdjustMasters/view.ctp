<div class="gradeAdjustMasters view">
<h2><?php  echo __('Grade Adjust Master'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AdhustName'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['AdhustName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CarryOverFlg'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['CarryOverFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['Priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['update_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latest Data Flg'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['latest_data_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Key'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['last_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($gradeAdjustMaster['GradeAdjustMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade Adjust Master'), array('action' => 'edit', $gradeAdjustMaster['GradeAdjustMaster']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade Adjust Master'), array('action' => 'delete', $gradeAdjustMaster['GradeAdjustMaster']['ID']), null, __('Are you sure you want to delete # %s?', $gradeAdjustMaster['GradeAdjustMaster']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Adjust Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Adjust Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
