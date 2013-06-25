<div class="beforeHiredTypeMasters view">
<h2><?php  echo __('Before Hired Type Master'); ?></h2>
	<dl>
		<dt><?php echo __('BeforeHiredTypeCD'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BeforeHiredTypeName'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PlanHiredCatName'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['PlanHiredCatName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($beforeHiredTypeMaster['BeforeHiredTypeMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Before Hired Type Master'), array('action' => 'edit', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Before Hired Type Master'), array('action' => 'delete', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD']), null, __('Are you sure you want to delete # %s?', $beforeHiredTypeMaster['BeforeHiredTypeMaster']['BeforeHiredTypeCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Before Hired Type Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Before Hired Type Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
