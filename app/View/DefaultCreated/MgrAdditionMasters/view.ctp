<div class="mgrAdditionMasters view">
<h2><?php  echo __('Mgr Addition Master'); ?></h2>
	<dl>
		<dt><?php echo __('RevYM'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RevYM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobGradeFrom'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['JobGradeFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobGradeTo'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['JobGradeTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayrollSystemFlg'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['PayrollSystemFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($mgrAdditionMaster['MgrAdditionMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mgr Addition Master'), array('action' => 'edit', $mgrAdditionMaster['MgrAdditionMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mgr Addition Master'), array('action' => 'delete', $mgrAdditionMaster['MgrAdditionMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $mgrAdditionMaster['MgrAdditionMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mgr Addition Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mgr Addition Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
