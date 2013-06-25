<div class="retiredEmpInfos index">
	<h2><?php echo __('Retired Emp Infos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('RetiredEmpID'); ?></th>
			<th><?php echo $this->Paginator->sort('PersonID'); ?></th>
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
	<?php foreach ($retiredEmpInfos as $retiredEmpInfo): ?>
	<tr>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['RetiredEmpID']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['PersonID']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['ProcessStatus']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($retiredEmpInfo['RetiredEmpInfo']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $retiredEmpInfo['RetiredEmpInfo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $retiredEmpInfo['RetiredEmpInfo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $retiredEmpInfo['RetiredEmpInfo']['id']), null, __('Are you sure you want to delete # %s?', $retiredEmpInfo['RetiredEmpInfo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Retired Emp Info'), array('action' => 'add')); ?></li>
	</ul>
</div>
