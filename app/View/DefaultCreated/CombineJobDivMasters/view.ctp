<div class="combineJobDivMasters view">
<h2><?php  echo __('Combine Job Div Master'); ?></h2>
	<dl>
		<dt><?php echo __('CombineJobCode'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['CombineJobCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CombineJobName'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['CombineJobName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CombineJobShortName'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['CombineJobShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($combineJobDivMaster['CombineJobDivMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Combine Job Div Master'), array('action' => 'edit', $combineJobDivMaster['CombineJobDivMaster']['CombineJobCode'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Combine Job Div Master'), array('action' => 'delete', $combineJobDivMaster['CombineJobDivMaster']['CombineJobCode']), null, __('Are you sure you want to delete # %s?', $combineJobDivMaster['CombineJobDivMaster']['CombineJobCode'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Combine Job Div Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combine Job Div Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
