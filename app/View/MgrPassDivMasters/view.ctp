<div class="mgrPassDivMasters view">
<h2><?php  echo __('Mgr Pass Div Master'); ?></h2>
	<dl>
		<dt><?php echo __('MgrPassDiv'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MgrPassDivName'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['MgrPassDivName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MgrPassDivShortName'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['MgrPassDivShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($mgrPassDivMaster['MgrPassDivMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mgr Pass Div Master'), array('action' => 'edit', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mgr Pass Div Master'), array('action' => 'delete', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv']), null, __('Are you sure you want to delete # %s?', $mgrPassDivMaster['MgrPassDivMaster']['MgrPassDiv'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mgr Pass Div Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mgr Pass Div Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
