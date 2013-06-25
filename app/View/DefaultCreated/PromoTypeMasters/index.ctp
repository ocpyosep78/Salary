<div class="promoTypeMasters index">
	<h2><?php echo __('Promo Type Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('PromoTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PromoTypeName'); ?></th>
			<th><?php echo $this->Paginator->sort('PromoShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($promoTypeMasters as $promoTypeMaster): ?>
	<tr>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['PromoTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['PromoTypeName']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['PromoShortName']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($promoTypeMaster['PromoTypeMaster']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD']), null, __('Are you sure you want to delete # %s?', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Promo Type Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
