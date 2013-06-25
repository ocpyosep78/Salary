<div class="recruitingOrgMasters view">
<h2><?php  echo __('Recruiting Org Master'); ?></h2>
	<dl>
		<dt><?php echo __('RecruitingOrgCD'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitingOrgName'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitingOrgShortName'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($recruitingOrgMaster['RecruitingOrgMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recruiting Org Master'), array('action' => 'edit', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recruiting Org Master'), array('action' => 'delete', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD']), null, __('Are you sure you want to delete # %s?', $recruitingOrgMaster['RecruitingOrgMaster']['RecruitingOrgCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recruiting Org Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recruiting Org Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
