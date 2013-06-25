<div class="schoolMasters view">
<h2><?php  echo __('School Master'); ?></h2>
	<dl>
		<dt><?php echo __('SchoolCD'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['SchoolCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SchoolName'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['SchoolName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($schoolMaster['SchoolMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School Master'), array('action' => 'edit', $schoolMaster['SchoolMaster']['SchoolCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School Master'), array('action' => 'delete', $schoolMaster['SchoolMaster']['SchoolCD']), null, __('Are you sure you want to delete # %s?', $schoolMaster['SchoolMaster']['SchoolCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List School Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
