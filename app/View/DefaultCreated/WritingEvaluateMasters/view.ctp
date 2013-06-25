<div class="writingEvaluateMasters view">
<h2><?php  echo __('Writing Evaluate Master'); ?></h2>
	<dl>
		<dt><?php echo __('WritingEvaluateCode'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marks'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['Marks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($writingEvaluateMaster['WritingEvaluateMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Writing Evaluate Master'), array('action' => 'edit', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Writing Evaluate Master'), array('action' => 'delete', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode']), null, __('Are you sure you want to delete # %s?', $writingEvaluateMaster['WritingEvaluateMaster']['WritingEvaluateCode'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Writing Evaluate Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Writing Evaluate Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
