<div class="licenseMasters view">
<h2><?php  echo __('License Master'); ?></h2>
	<dl>
		<dt><?php echo __('LicenseCD'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['LicenseCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LicenseName'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['LicenseName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($licenseMaster['LicenseMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit License Master'), array('action' => 'edit', $licenseMaster['LicenseMaster']['LicenseCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete License Master'), array('action' => 'delete', $licenseMaster['LicenseMaster']['LicenseCD']), null, __('Are you sure you want to delete # %s?', $licenseMaster['LicenseMaster']['LicenseCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List License Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
