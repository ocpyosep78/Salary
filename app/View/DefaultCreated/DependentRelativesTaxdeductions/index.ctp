<div class="dependentRelativesTaxdeductions index">
	<h2><?php echo __('Dependent Relatives Taxdeductions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CertifiedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('DependentRelativesID'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddress'); ?></th>
			<th><?php echo $this->Paginator->sort('RearingAllowanceReceivingFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('TaxDeductionContinueFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('DependentsOnTaxStartMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('DependentsOnTaxEndMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('MinorsFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('ElderlyFlag'); ?></th>
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
	<?php foreach ($dependentRelativesTaxdeductions as $dependentRelativesTaxdeduction): ?>
	<tr>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['CertifiedDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DependentRelativesID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['SeparationAddress']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RearingAllowanceReceivingFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['TaxDeductionContinueFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DependentsOnTaxStartMonth']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DependentsOnTaxEndMonth']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['MinorsFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ElderlyFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID']), null, __('Are you sure you want to delete # %s?', $dependentRelativesTaxdeduction['DependentRelativesTaxdeduction']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dependent Relatives Taxdeduction'), array('action' => 'add')); ?></li>
	</ul>
</div>
