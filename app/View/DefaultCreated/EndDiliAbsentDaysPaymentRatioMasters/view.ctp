<div class="endDiliAbsentDaysPaymentRatioMasters view">
<h2><?php  echo __('End Dili Absent Days Payment Ratio Master'); ?></h2>
	<dl>
		<dt><?php echo __('RevYM'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MetWardDiv'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['MetWardDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDiliMonPayment'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['EndDiliMonPayment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDiligenceDiv'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['EndDiligenceDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AbsentDaysFrom'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['AbsentDaysFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AbsentDaysTo'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['AbsentDaysTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentRatio'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['PaymentRatio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit End Dili Absent Days Payment Ratio Master'), array('action' => 'edit', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete End Dili Absent Days Payment Ratio Master'), array('action' => 'delete', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM']), null, __('Are you sure you want to delete # %s?', $endDiliAbsentDaysPaymentRatioMaster['EndDiliAbsentDaysPaymentRatioMaster']['RevYM'])); ?> </li>
		<li><?php echo $this->Html->link(__('List End Dili Absent Days Payment Ratio Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New End Dili Absent Days Payment Ratio Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
