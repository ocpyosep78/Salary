<div class="organisationMasters view">
<h2><?php  echo __('Organisation Master'); ?></h2>
	<dl>
		<dt><?php echo __('OrgCD'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrgCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrgName'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrgName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrgShortName'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrgShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrgName Hist'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrgName_Hist']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayerDiv'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['PayerDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderRightsRole'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrderRightsRole']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderRightsHistName'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrderRightsHistName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderRightsName'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['OrderRightsName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoticeOrgName'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['NoticeOrgName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoticeContOrgName'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['NoticeContOrgName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($organisationMaster['OrganisationMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organisation Master'), array('action' => 'edit', $organisationMaster['OrganisationMaster']['OrgCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organisation Master'), array('action' => 'delete', $organisationMaster['OrganisationMaster']['OrgCD']), null, __('Are you sure you want to delete # %s?', $organisationMaster['OrganisationMaster']['OrgCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisation Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
