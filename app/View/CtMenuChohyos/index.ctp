<div class="ctMenuChohyos index">
	<h2><?php echo __('Ct Menu Chohyos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('MenuPrintID'); ?></th>
			<th><?php echo $this->Paginator->sort('AccessFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('OldNameFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('PopularNameFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ctMenuChohyos as $ctMenuChohyo): ?>
	<tr>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['MenuPrintID']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['AccessFlg']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['OldNameFlg']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['PopularNameFlg']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($ctMenuChohyo['CtMenuChohyo']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID']), null, __('Are you sure you want to delete # %s?', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ct Menu Chohyo'), array('action' => 'add')); ?></li>
	</ul>
</div>
