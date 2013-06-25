<div class="floorMasters view">
<h2><?php  echo __('Floor Master'); ?></h2>
	<dl>
		<dt><?php echo __('FloorCD'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['FloorCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FloorName'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['FloorName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FloorShortName'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['FloorShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($floorMaster['FloorMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Floor Master'), array('action' => 'edit', $floorMaster['FloorMaster']['FloorCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Floor Master'), array('action' => 'delete', $floorMaster['FloorMaster']['FloorCD']), null, __('Are you sure you want to delete # %s?', $floorMaster['FloorMaster']['FloorCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Floor Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Floor Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
