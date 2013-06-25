<div class="maxGradeRegMasters view">
<h2><?php  echo __('Max Grade Reg Master'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTableName'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryTableName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTableCD'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryTableCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryClassCD'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryClassCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryGradeCD'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['SalaryGradeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['update_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latest Data Flg'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['latest_data_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Key'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['last_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($maxGradeRegMaster['MaxGradeRegMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Max Grade Reg Master'), array('action' => 'edit', $maxGradeRegMaster['MaxGradeRegMaster']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Max Grade Reg Master'), array('action' => 'delete', $maxGradeRegMaster['MaxGradeRegMaster']['ID']), null, __('Are you sure you want to delete # %s?', $maxGradeRegMaster['MaxGradeRegMaster']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Max Grade Reg Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Max Grade Reg Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
