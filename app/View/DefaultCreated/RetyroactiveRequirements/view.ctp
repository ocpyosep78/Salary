<div class="retyroactiveRequirements view">
<h2><?php  echo __('Retyroactive Requirement'); ?></h2>
	<dl>
		<dt><?php echo __('RetyroactiveRequirementID'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AdjustedEmpProcessRunID'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['AdjustedEmpProcessRunID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ProcessStatus'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['ProcessStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retyroactive Requirement'), array('action' => 'edit', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retyroactive Requirement'), array('action' => 'delete', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID']), null, __('Are you sure you want to delete # %s?', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retyroactive Requirements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retyroactive Requirement'), array('action' => 'add')); ?> </li>
	</ul>
</div>
