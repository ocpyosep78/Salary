<div class="lGovMasters view">
<h2><?php  echo __('L Gov Master'); ?></h2>
	<dl>
		<dt><?php echo __('LGovMasterNo'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['LGovMasterNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LGovCode'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['LGovCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LGovName'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['LGovName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LGovNameFuri'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['LGovNameFuri']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LGovNameFuriKogaki'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['LGovNameFuriKogaki']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZipCD'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['ZipCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location JP'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['Location_JP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelNo'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['TelNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankUpdateDate'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['BankUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($lGovMaster['LGovMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit L Gov Master'), array('action' => 'edit', $lGovMaster['LGovMaster']['LGovMasterNo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete L Gov Master'), array('action' => 'delete', $lGovMaster['LGovMaster']['LGovMasterNo']), null, __('Are you sure you want to delete # %s?', $lGovMaster['LGovMaster']['LGovMasterNo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List L Gov Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New L Gov Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
