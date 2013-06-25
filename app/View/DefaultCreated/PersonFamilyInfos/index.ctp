<div class="personFamilyInfos index">
	<h2><?php echo __('Person Family Infos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('PersonFamilyInfoID'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpBasicInformationID'); ?></th>
			<th><?php echo $this->Paginator->sort('PersonID'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpNo'); ?></th>
			<th><?php echo $this->Paginator->sort('RowCounter'); ?></th>
			<th><?php echo $this->Paginator->sort('Relationship'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('NameKana'); ?></th>
			<th><?php echo $this->Paginator->sort('Sex'); ?></th>
			<th><?php echo $this->Paginator->sort('BirthDate'); ?></th>
			<th><?php echo $this->Paginator->sort('DeathDate'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationFlg'); ?></th>
			<th><?php echo $this->Paginator->sort('HandicapDiv1'); ?></th>
			<th><?php echo $this->Paginator->sort('HandicapDiv2'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationZipCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddressCD'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddress'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddressDetail'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddressMemo'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddressKana'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationAddressDetailKata'); ?></th>
			<th><?php echo $this->Paginator->sort('SeparationTelNo'); ?></th>
			<th><?php echo $this->Paginator->sort('WorkPlaceName'); ?></th>
			<th><?php echo $this->Paginator->sort('WorkPlaceTelNo'); ?></th>
			<th><?php echo $this->Paginator->sort('TaxDeductionStartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('TaxDeductionEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('DependFamStartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('DependFamEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('ColaboDependDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('ChildAllowStartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('ChildAllowEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('ChildAllowDiv'); ?></th>
			<th><?php echo $this->Paginator->sort('ChildAllowCondStartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('ChildAllowCondEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('Remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_date'); ?></th>
			<th><?php echo $this->Paginator->sort('registered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th><?php echo $this->Paginator->sort('latest_data_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('last_key'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expired_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personFamilyInfos as $personFamilyInfo): ?>
	<tr>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['PersonFamilyInfoID']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['EmpBasicInformationID']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['PersonID']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['EmpNo']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['RowCounter']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['Relationship']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['Name']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['NameKana']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['Sex']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['BirthDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['DeathDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationFlg']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['HandicapDiv1']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['HandicapDiv2']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationZipCD']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationAddressCD']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationAddress']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationAddressDetail']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationAddressMemo']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationAddressKana']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationAddressDetailKata']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['SeparationTelNo']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['WorkPlaceName']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['WorkPlaceTelNo']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['TaxDeductionStartDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['TaxDeductionEndDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['DependFamStartDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['DependFamEndDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['ColaboDependDiv']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['ChildAllowStartDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['ChildAllowEndDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['ChildAllowDiv']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['ChildAllowCondStartDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['ChildAllowCondEndDate']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['Remarks']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['registered_date']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['registered_by']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['latest_data_flg']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['last_key']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($personFamilyInfo['PersonFamilyInfo']['expired_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personFamilyInfo['PersonFamilyInfo']['PersonFamilyInfoID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personFamilyInfo['PersonFamilyInfo']['PersonFamilyInfoID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personFamilyInfo['PersonFamilyInfo']['PersonFamilyInfoID']), null, __('Are you sure you want to delete # %s?', $personFamilyInfo['PersonFamilyInfo']['PersonFamilyInfoID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Person Family Info'), array('action' => 'add')); ?></li>
	</ul>
</div>
