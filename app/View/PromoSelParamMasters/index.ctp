<div class="promoSelParamMasters index">
	<h2><?php echo __('Promo Sel Param Masters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('PromoSelParamID'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectTypeCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectTypeName'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelTypeRowCounter'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectDivName'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectDivShortName'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectPatternCD'); ?></th>
			<th><?php echo $this->Paginator->sort('PrSelectPatternName'); ?></th>
			<th><?php echo $this->Paginator->sort('RecruitDivCD'); ?></th>
			<th><?php echo $this->Paginator->sort('JobTypeText'); ?></th>
			<th><?php echo $this->Paginator->sort('AgeLowerLimit'); ?></th>
			<th><?php echo $this->Paginator->sort('AgeUpperLimit'); ?></th>
			<th><?php echo $this->Paginator->sort('WdServiceYearsLwLimit'); ?></th>
			<th><?php echo $this->Paginator->sort('WdServiceYearsUpLimit'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYearsSetName1'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYearsLwLimit1'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYearsUpLimit1'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYearsSetName2'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYearsLwLimit2'); ?></th>
			<th><?php echo $this->Paginator->sort('ServiceYearsUpLimit2'); ?></th>
			<th><?php echo $this->Paginator->sort('UnivGraduationDate'); ?></th>
			<th><?php echo $this->Paginator->sort('AbsentDays'); ?></th>
			<th><?php echo $this->Paginator->sort('ExempAquisYear'); ?></th>
			<th><?php echo $this->Paginator->sort('ExempValidYears'); ?></th>
			<th><?php echo $this->Paginator->sort('BeforeHistoryRefFlg'); ?></th>
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
	<?php foreach ($promoSelParamMasters as $promoSelParamMaster): ?>
	<tr>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PromoSelParamID']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectTypeCD']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectTypeName']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelTypeRowCounter']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectDivCD']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectDivName']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectDivShortName']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectPatternCD']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['PrSelectPatternName']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['RecruitDivCD']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['JobTypeText']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['AgeLowerLimit']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['AgeUpperLimit']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['WdServiceYearsLwLimit']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['WdServiceYearsUpLimit']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ServiceYearsSetName1']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ServiceYearsLwLimit1']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ServiceYearsUpLimit1']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ServiceYearsSetName2']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ServiceYearsLwLimit2']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ServiceYearsUpLimit2']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['UnivGraduationDate']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['AbsentDays']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ExempAquisYear']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['ExempValidYears']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['BeforeHistoryRefFlg']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['RegDate']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['RegisteredBy']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['RegPgID']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['UpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['UpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['UpdatePgmID']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['DeleteFlg']); ?>&nbsp;</td>
		<td><?php echo h($promoSelParamMaster['PromoSelParamMaster']['VersionNo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $promoSelParamMaster['PromoSelParamMaster']['PromoSelParamID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $promoSelParamMaster['PromoSelParamMaster']['PromoSelParamID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $promoSelParamMaster['PromoSelParamMaster']['PromoSelParamID']), null, __('Are you sure you want to delete # %s?', $promoSelParamMaster['PromoSelParamMaster']['PromoSelParamID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Promo Sel Param Master'), array('action' => 'add')); ?></li>
	</ul>
</div>
