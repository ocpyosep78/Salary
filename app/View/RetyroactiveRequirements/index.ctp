<div class="retyroactiveRequirements index">
	<h2><?php echo __('Retyroactive Requirements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RetyroactiveRequirementID'); ?></th>
			<th><?php echo $this->Paginator->sort('AdjustedEmpProcessRunID'); ?></th>
			<th><?php echo $this->Paginator->sort('ProcessStatus'); ?></th>
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
	<?php foreach ($retyroactiveRequirements as $retyroactiveRequirement): ?>
	<tr>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['AdjustedEmpProcessRunID']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['ProcessStatus']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($retyroactiveRequirement['RetyroactiveRequirement']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID']), null, __('Are you sure you want to delete # %s?', $retyroactiveRequirement['RetyroactiveRequirement']['RetyroactiveRequirementID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Retyroactive Requirement'), array('action' => 'add')); ?></li>
	</ul>
</div>
