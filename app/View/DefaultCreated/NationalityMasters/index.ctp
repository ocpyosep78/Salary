<div class="nationalityMasters index">
	<h2><?php echo __('Nationality Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('NationalityCD'); ?></th>
			<th><?php echo $this->Paginator->sort('NationalityName'); ?></th>
			<th><?php echo $this->Paginator->sort('NationalityShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
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
	<?php foreach ($nationalityMasters as $nationalityMaster): ?>
	<tr>
		<td><?php echo h($nationalityMaster['NationalityMaster']['NationalityCD']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['NationalityName']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['NationalityShortName']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($nationalityMaster['NationalityMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nationalityMaster['NationalityMaster']['NationalityCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nationalityMaster['NationalityMaster']['NationalityCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nationalityMaster['NationalityMaster']['NationalityCD']), null, __('Are you sure you want to delete # %s?', $nationalityMaster['NationalityMaster']['NationalityCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Nationality Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
