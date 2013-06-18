<div class="salaryClassPassDivMasters view">
<h2><?php  echo __('Salary Class Pass Div Master'); ?></h2>
	<dl>
		<dt><?php echo __('SalaryClassPassDiv'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryClassPassDivName'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDivName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryClassPassDivShortName'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDivShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($salaryClassPassDivMaster['SalaryClassPassDivMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salary Class Pass Div Master'), array('action' => 'edit', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary Class Pass Div Master'), array('action' => 'delete', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv']), null, __('Are you sure you want to delete # %s?', $salaryClassPassDivMaster['SalaryClassPassDivMaster']['SalaryClassPassDiv'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salary Class Pass Div Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary Class Pass Div Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
