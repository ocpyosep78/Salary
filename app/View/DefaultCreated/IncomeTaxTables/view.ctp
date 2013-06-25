<div class="incomeTaxTables view">
<h2><?php  echo __('Income Tax Table'); ?></h2>
	<dl>
		<dt><?php echo __('TableType'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['TableType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoOfDependentFamily'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['NoOfDependentFamily']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmountFrom'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['AmountFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmountTo'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['AmountTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaxAmount'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['TaxAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($incomeTaxTable['IncomeTaxTable']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Income Tax Table'), array('action' => 'edit', $incomeTaxTable['IncomeTaxTable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Income Tax Table'), array('action' => 'delete', $incomeTaxTable['IncomeTaxTable']['id']), null, __('Are you sure you want to delete # %s?', $incomeTaxTable['IncomeTaxTable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Income Tax Tables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income Tax Table'), array('action' => 'add')); ?> </li>
	</ul>
</div>
