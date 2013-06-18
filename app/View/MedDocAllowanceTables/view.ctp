<div class="medDocAllowanceTables view">
<h2><?php  echo __('Med Doc Allowance Table'); ?></h2>
	<dl>
		<dt><?php echo __('MedWorkingYears'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['MedWorkingYears']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetAmount'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['NetAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($medDocAllowanceTable['MedDocAllowanceTable']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Med Doc Allowance Table'), array('action' => 'edit', $medDocAllowanceTable['MedDocAllowanceTable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Med Doc Allowance Table'), array('action' => 'delete', $medDocAllowanceTable['MedDocAllowanceTable']['id']), null, __('Are you sure you want to delete # %s?', $medDocAllowanceTable['MedDocAllowanceTable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Med Doc Allowance Tables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Med Doc Allowance Table'), array('action' => 'add')); ?> </li>
	</ul>
</div>
