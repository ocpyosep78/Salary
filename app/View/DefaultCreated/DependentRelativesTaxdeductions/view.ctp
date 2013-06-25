<div class="dependentRelativesTaxdeductions view">
<h2><?php  echo __('Dependent Relatives Taxdeduction'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CertifiedDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['CertifiedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DependentRelativesID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DependentRelativesID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SeparationAddress'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['SeparationAddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RearingAllowanceReceivingFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RearingAllowanceReceivingFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaxDeductionContinueFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['TaxDeductionContinueFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DependentsOnTaxStartMonth'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DependentsOnTaxStartMonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DependentsOnTaxEndMonth'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DependentsOnTaxEndMonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MinorsFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['MinorsFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ElderlyFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ElderlyFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependent Relatives Taxdeduction'), array('action' => 'edit', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependent Relatives Taxdeduction'), array('action' => 'delete', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID']), null, __('Are you sure you want to delete # %s?', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependent Relatives Taxdeductions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependent Relatives Taxdeduction'), array('action' => 'add')); ?> </li>
	</ul>
</div>
