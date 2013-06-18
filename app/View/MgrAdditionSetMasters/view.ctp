<div class="mgrAdditionSetMasters view">
<h2><?php  echo __('Mgr Addition Set Master'); ?></h2>
	<dl>
		<dt><?php echo __('RevYM'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobGradeFrom'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['JobGradeFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobGradeTo'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['JobGradeTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddRate'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['AddRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionSetMaster['MgrAdditionSetMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mgr Addition Set Master'), array('action' => 'edit', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mgr Addition Set Master'), array('action' => 'delete', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $mgrAdditionSetMaster['MgrAdditionSetMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mgr Addition Set Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mgr Addition Set Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
