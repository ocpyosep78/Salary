<div class="hourlySalaryCalcCondIncMasters view">
<h2><?php  echo __('Hourly Salary Calc Cond Inc Master'); ?></h2>
	<dl>
		<dt><?php echo __('FiscalYear'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['FiscalYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTypeCD'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['SalaryTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AllowDetailCD'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['AllowDetailCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpecialDutySalaryIncDiv'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['SpecialDutySalaryIncDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpecialDutySalaryIncDays'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['SpecialDutySalaryIncDays']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hourly Salary Calc Cond Inc Master'), array('action' => 'edit', $hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['FiscalYear'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hourly Salary Calc Cond Inc Master'), array('action' => 'delete', $hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['FiscalYear']), null, __('Are you sure you want to delete # %s?', $hourlySalaryCalcCondIncMaster['HourlySalaryCalcCondIncMaster']['FiscalYear'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hourly Salary Calc Cond Inc Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hourly Salary Calc Cond Inc Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
