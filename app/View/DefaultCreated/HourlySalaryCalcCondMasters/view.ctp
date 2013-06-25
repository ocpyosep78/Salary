<div class="hourlySalaryCalcCondMasters view">
<h2><?php  echo __('Hourly Salary Calc Cond Master'); ?></h2>
	<dl>
		<dt><?php echo __('FiscalYear'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTypeCD'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['SalaryTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WeekPerYear'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WeekPerYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WorkingTimesOfWeekHour'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfWeekHour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WorkingTimesOfWeekMinite'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfWeekMinite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HolidayPerYear'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['HolidayPerYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WorkingTimesOfDayHour'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfDayHour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WorkingTimesOfDayMinite'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['WorkingTimesOfDayMinite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hourly Salary Calc Cond Master'), array('action' => 'edit', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hourly Salary Calc Cond Master'), array('action' => 'delete', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear']), null, __('Are you sure you want to delete # %s?', $hourlySalaryCalcCondMaster['HourlySalaryCalcCondMaster']['FiscalYear'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hourly Salary Calc Cond Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hourly Salary Calc Cond Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
