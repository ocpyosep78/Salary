<div class="retiredEmpInfos view">
<h2><?php  echo __('Retired Emp Info'); ?></h2>
	<dl>
		<dt><?php echo __('RetiredEmpID'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['RetiredEmpID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PersonID'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['PersonID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ProcessStatus'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['ProcessStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($retiredEmpInfo['RetiredEmpInfo']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retired Emp Info'), array('action' => 'edit', $retiredEmpInfo['RetiredEmpInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retired Emp Info'), array('action' => 'delete', $retiredEmpInfo['RetiredEmpInfo']['id']), null, __('Are you sure you want to delete # %s?', $retiredEmpInfo['RetiredEmpInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retired Emp Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retired Emp Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
