<div class="recruitDivMasters view">
<h2><?php  echo __('Recruit Div Master'); ?></h2>
	<dl>
		<dt><?php echo __('RecruitDivCD'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['RecruitDivCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitDiv'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['RecruitDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitDivShortName'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['RecruitDivShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($recruitDivMaster['RecruitDivMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recruit Div Master'), array('action' => 'edit', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recruit Div Master'), array('action' => 'delete', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD']), null, __('Are you sure you want to delete # %s?', $recruitDivMaster['RecruitDivMaster']['RecruitDivCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recruit Div Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recruit Div Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
