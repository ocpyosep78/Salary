<div class="dependentRelativesBasics view">
<h2><?php  echo __('Dependent Relatives Basic'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PersonID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['PersonID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['Relationship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NameKana'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['NameKana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['Gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateOfBirth'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DateOfBirth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateOfDeath'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DateOfDeath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LiveTogetherDiv'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['LiveTogetherDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SustainedBySpouseFlg'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['SustainedBySpouseFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DependentRelativeAllowanceFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DependentRelativeAllowanceFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DependentDeductionFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DependentDeductionFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChildAllowanceFlag'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['ChildAllowanceFlag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($dependentRelativesBasic['DependentRelativesBasic']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependent Relatives Basic'), array('action' => 'edit', $dependentRelativesBasic['DependentRelativesBasic']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependent Relatives Basic'), array('action' => 'delete', $dependentRelativesBasic['DependentRelativesBasic']['ID']), null, __('Are you sure you want to delete # %s?', $dependentRelativesBasic['DependentRelativesBasic']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependent Relatives Basics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependent Relatives Basic'), array('action' => 'add')); ?> </li>
	</ul>
</div>
