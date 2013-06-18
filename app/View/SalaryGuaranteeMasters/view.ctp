<div class="salaryGuaranteeMasters view">
<h2><?php  echo __('Salary Guarantee Master'); ?></h2>
	<dl>
		<dt><?php echo __('SalaryGuaranteeID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevYMD'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RevYMD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GuaranteeAmoTabCD'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['GuaranteeAmoTabCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalaryClassCD'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryClassCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixedAmoAddAmounts'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['FixedAmoAddAmounts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixedRateAddRate'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['FixedRateAddRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($salaryGuaranteeMaster['SalaryGuaranteeMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salary Guarantee Master'), array('action' => 'edit', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary Guarantee Master'), array('action' => 'delete', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID']), null, __('Are you sure you want to delete # %s?', $salaryGuaranteeMaster['SalaryGuaranteeMaster']['SalaryGuaranteeID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salary Guarantee Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary Guarantee Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
