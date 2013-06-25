<div class="ctShozokuKengens index">
	<h2><?php echo __('Ct Shozoku Kengens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('DepCompetenceID'); ?></th>
			<th><?php echo $this->Paginator->sort('DepCD'); ?></th>
			<th><?php echo $this->Paginator->sort('CompetenceCD'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ctShozokuKengens as $ctShozokuKengen): ?>
	<tr>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['DepCompetenceID']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['DepCD']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['CompetenceCD']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['EmpDiv']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($ctShozokuKengen['CtShozokuKengen']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID']), null, __('Are you sure you want to delete # %s?', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ct Shozoku Kengen'), array('action' => 'add')); ?></li>
	</ul>
</div>
