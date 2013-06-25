<div class="aaaaaaaaaaaaaaaaaaaaaaaaas index">
	<h2><?php echo __('Aaaaaaaaaaaaaaaaaaaaaaaaas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('EmpBasicInformationID'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('AssignOrgCD'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aaaaaaaaaaaaaaaaaaaaaaaaas as $aaaaaaaaaaaaaaaaaaaaaaaaa): ?>
	<tr>
		<td><?php echo h($aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['EmpBasicInformationID']); ?>&nbsp;</td>
		<td><?php echo h($aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['AssignOrgCD']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id']), null, __('Are you sure you want to delete # %s?', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aaaaaaaaaaaaaaaaaaaaaaaaa'), array('action' => 'add')); ?></li>
	</ul>
</div>
