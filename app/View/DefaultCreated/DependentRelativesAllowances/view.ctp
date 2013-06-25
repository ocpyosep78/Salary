<div class="dependentRelativesAllowances view">
<h2><?php  echo __('Dependent Relatives Allowance'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CertifiedDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['CertifiedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DependentRelativesID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['DependentRelativesID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['Occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AnnualIncome'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['AnnualIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChallengedDiv'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['ChallengedDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MovementReason'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['MovementReason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('KindOfRelatonship'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['KindOfRelatonship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AllowanceStartMonth'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['AllowanceStartMonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AllowanceEndMonth'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['AllowanceEndMonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CoDependentsDiv'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['CoDependentsDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaxDeductionDiv'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['TaxDeductionDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpoutDiv'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['SpoutDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PlaceOfEmploymentDiv'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['PlaceOfEmploymentDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WardOffice'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['WardOffice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependent Relatives Allowance'), array('action' => 'edit', $dependentRelativesAllowance['DependentRelativesAllowance']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependent Relatives Allowance'), array('action' => 'delete', $dependentRelativesAllowance['DependentRelativesAllowance']['ID']), null, __('Are you sure you want to delete # %s?', $dependentRelativesAllowance['DependentRelativesAllowance']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependent Relatives Allowances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependent Relatives Allowance'), array('action' => 'add')); ?> </li>
	</ul>
</div>
