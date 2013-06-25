<div class="revisionRenewalInfos view">
<h2><?php  echo __('Revision Renewal Info'); ?></h2>
	<dl>
		<dt><?php echo __('RevisionRenewalInfoID'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryTableRevTypeCD'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['FixSalaryTableRevTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RenewalDiv'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RenewalDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevisionFixAmount'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionFixAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevisionAddAmount'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionAddAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevisionRenewalDate'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FixSalaryEmpInformationID'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['FixSalaryEmpInformationID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latest Data Div'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['latest_data_div']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Pgid'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['registered_pgid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Pgid'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['updated_pgid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version No'); ?></dt>
		<dd>
			<?php echo h($revisionRenewalInfo['RevisionRenewalInfo']['version_no']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Revision Renewal Info'), array('action' => 'edit', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Revision Renewal Info'), array('action' => 'delete', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID']), null, __('Are you sure you want to delete # %s?', $revisionRenewalInfo['RevisionRenewalInfo']['RevisionRenewalInfoID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Revision Renewal Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revision Renewal Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
