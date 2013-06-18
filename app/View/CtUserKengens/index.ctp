<div class="ctUserKengens index">
	<h2><?php echo __('Ct User Kengens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('EmpCompetenceID'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('CompetenceCD'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ctUserKengens as $ctUserKengen): ?>
	<tr>
		<td><?php echo h($ctUserKengen['CtUserKengen']['EmpCompetenceID']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['CompetenceCD']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($ctUserKengen['CtUserKengen']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ctUserKengen['CtUserKengen']['EmpCompetenceID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ctUserKengen['CtUserKengen']['EmpCompetenceID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ctUserKengen['CtUserKengen']['EmpCompetenceID']), null, __('Are you sure you want to delete # %s?', $ctUserKengen['CtUserKengen']['EmpCompetenceID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ct User Kengen'), array('action' => 'add')); ?></li>
	</ul>
</div>
