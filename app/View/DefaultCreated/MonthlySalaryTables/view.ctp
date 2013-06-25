<div class="monthlySalaryTables view">
<h2><?php  echo __('Monthly Salary Table'); ?></h2>
	<dl>
		<dt><?php echo __('EmpDiv'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['EmpDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTableCD'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['SalaryTableCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryClass'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['SalaryClass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryGrade'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['SalaryGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtherCategory'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['OtherCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentAmount'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['PaymentAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($monthlySalaryTable['MonthlySalaryTable']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Monthly Salary Table'), array('action' => 'edit', $monthlySalaryTable['MonthlySalaryTable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Monthly Salary Table'), array('action' => 'delete', $monthlySalaryTable['MonthlySalaryTable']['id']), null, __('Are you sure you want to delete # %s?', $monthlySalaryTable['MonthlySalaryTable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Monthly Salary Tables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Monthly Salary Table'), array('action' => 'add')); ?> </li>
	</ul>
</div>
