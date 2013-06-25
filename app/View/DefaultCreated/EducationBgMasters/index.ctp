<div class="educationBgMasters index">
	<h2><?php echo __('Education Bg Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('EduBgCD'); ?></th>
			<th><?php echo $this->Paginator->sort('EduBgName'); ?></th>
			<th><?php echo $this->Paginator->sort('EduBgShortName'); ?></th>
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
	<?php foreach ($educationBgMasters as $educationBgMaster): ?>
	<tr>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['EduBgCD']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['EduBgName']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['EduBgShortName']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($educationBgMaster['EducationBgMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationBgMaster['EducationBgMaster']['EduBgCD'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationBgMaster['EducationBgMaster']['EduBgCD'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationBgMaster['EducationBgMaster']['EduBgCD']), null, __('Are you sure you want to delete # %s?', $educationBgMaster['EducationBgMaster']['EduBgCD'])); ?>
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
		<li><?php echo $this->Html->link(__('New Education Bg Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
