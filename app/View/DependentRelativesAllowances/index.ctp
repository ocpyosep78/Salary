<div class="dependentRelativesAllowances index">
	<h2><?php echo __('Dependent Relatives Allowances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CertifiedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('DependentRelativesID'); ?></th>
			<th><?php echo $this->Paginator->sort('Occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('AnnualIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('ChallengedDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('MovementReason'); ?></th>
			<th><?php echo $this->Paginator->sort('KindOfRelatonship'); ?></th>
			<th><?php echo $this->Paginator->sort('AllowanceStartMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('AllowanceEndMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('CoDependentsDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('TaxDeductionDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('SpoutDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('PlaceOfEmploymentDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('WardOffice'); ?></th>
			<th><?php echo $this->Paginator->sort('RegDate'); ?></th>
			<th><?php echo $this->Paginator->sort('RegisteredBy'); ?></th>
			<th><?php echo $this->Paginator->sort('RegPgID'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdateBy'); ?></th>
			<th><?php echo $this->Paginator->sort('UpdatePgmID'); ?></th>
			<th><?php echo $this->Paginator->sort('DeleteFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('VersionNo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dependentRelativesAllowances as $dependentRelativesAllowance): ?>
	<tr>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['ID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['CertifiedDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['DependentRelativesID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['Occupation']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['AnnualIncome']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['ChallengedDiv']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['MovementReason']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['KindOfRelatonship']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['AllowanceStartMonth']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['AllowanceEndMonth']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['CoDependentsDiv']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['TaxDeductionDiv']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['SpoutDiv']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['PlaceOfEmploymentDiv']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['WardOffice']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesAllowance['DependentRelativesAllowance']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dependentRelativesAllowance['DependentRelativesAllowance']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dependentRelativesAllowance['DependentRelativesAllowance']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dependentRelativesAllowance['DependentRelativesAllowance']['ID']), null, __('Are you sure you want to delete # %s?', $dependentRelativesAllowance['DependentRelativesAllowance']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dependent Relatives Allowance'), array('action' => 'add')); ?></li>
	</ul>
</div>
