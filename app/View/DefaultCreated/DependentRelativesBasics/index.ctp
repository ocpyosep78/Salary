<div class="dependentRelativesBasics index">
	<h2><?php echo __('Dependent Relatives Basics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PersonID'); ?></th>
			<th><?php echo $this->Paginator->sort('Relationship'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('NameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('Gender'); ?></th>
			<th><?php echo $this->Paginator->sort('DateOfBirth'); ?></th>
			<th><?php echo $this->Paginator->sort('DateOfDeath'); ?></th>
			<th><?php echo $this->Paginator->sort('LiveTogetherDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('SustainedBySpouseFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('DependentRelativeAllowanceFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('DependentDeductionFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('ChildAllowanceFlag'); ?></th>
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
	<?php foreach ($dependentRelativesBasics as $dependentRelativesBasic): ?>
	<tr>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['ID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['PersonID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['Relationship']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['Name']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['NameKana']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['Gender']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DateOfBirth']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DateOfDeath']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['LiveTogetherDiv']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['SustainedBySpouseFlg']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DependentRelativeAllowanceFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DependentDeductionFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['ChildAllowanceFlag']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($dependentRelativesBasic['DependentRelativesBasic']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dependentRelativesBasic['DependentRelativesBasic']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dependentRelativesBasic['DependentRelativesBasic']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dependentRelativesBasic['DependentRelativesBasic']['ID']), null, __('Are you sure you want to delete # %s?', $dependentRelativesBasic['DependentRelativesBasic']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dependent Relatives Basic'), array('action' => 'add')); ?></li>
	</ul>
</div>
