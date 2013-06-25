<div class="retirementAllowanceTables view">
<h2><?php  echo __('Retirement Allowance Table'); ?></h2>
	<dl>
		<dt><?php echo __('ServiceYears'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['ServiceYears']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RetirementCategory'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RetirementCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentRatio'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['PaymentRatio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($retirementAllowanceTable['RetirementAllowanceTable']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retirement Allowance Table'), array('action' => 'edit', $retirementAllowanceTable['RetirementAllowanceTable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retirement Allowance Table'), array('action' => 'delete', $retirementAllowanceTable['RetirementAllowanceTable']['id']), null, __('Are you sure you want to delete # %s?', $retirementAllowanceTable['RetirementAllowanceTable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retirement Allowance Tables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retirement Allowance Table'), array('action' => 'add')); ?> </li>
	</ul>
</div>
