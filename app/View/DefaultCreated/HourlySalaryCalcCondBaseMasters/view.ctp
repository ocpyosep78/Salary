<div class="hourlySalaryCalcCondBaseMasters view">
<h2><?php  echo __('Hourly Salary Calc Cond Base Master'); ?></h2>
	<dl>
		<dt><?php echo __('FiscalYear'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryTypeCD'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['SalaryTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AllowCD'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['AllowCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hourly Salary Calc Cond Base Master'), array('action' => 'edit', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hourly Salary Calc Cond Base Master'), array('action' => 'delete', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear']), null, __('Are you sure you want to delete # %s?', $hourlySalaryCalcCondBaseMaster['HourlySalaryCalcCondBaseMaster']['FiscalYear'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hourly Salary Calc Cond Base Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hourly Salary Calc Cond Base Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
