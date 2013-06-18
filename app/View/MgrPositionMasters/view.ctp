<div class="mgrPositionMasters view">
<h2><?php  echo __('Mgr Position Master'); ?></h2>
	<dl>
		<dt><?php echo __('MgrCD'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['MgrCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MgrName'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['MgrName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MgrShortName'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['MgrShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['effective_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($mgrPositionMaster['MgrPositionMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mgr Position Master'), array('action' => 'edit', $mgrPositionMaster['MgrPositionMaster']['MgrCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mgr Position Master'), array('action' => 'delete', $mgrPositionMaster['MgrPositionMaster']['MgrCD']), null, __('Are you sure you want to delete # %s?', $mgrPositionMaster['MgrPositionMaster']['MgrCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mgr Position Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mgr Position Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
