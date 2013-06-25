<div class="bankMasters view">
<h2><?php  echo __('Bank Master'); ?></h2>
	<dl>
		<dt><?php echo __('BankMasterNo'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankMasterNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankCode'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankBranchCode'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankBranchCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankNameKana'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankNameKana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankBrancheName'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankBrancheName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankTypeDiv'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankTypeDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BillTransPlaceNumber'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BillTransPlaceNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LocationPrefKana'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['LocationPrefKana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LocationCityKana'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['LocationCityKana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location JP'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['Location_JP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StreetNum Eng'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['StreetNum_Eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StreetNum JP'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['StreetNum_JP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelNo'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['TelNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZipCD'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['ZipCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MainBranchDiv'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['MainBranchDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZenginFlg'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['ZenginFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TagFlg'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['TagFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BankUpdateDate'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['BankUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($bankMaster['BankMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bank Master'), array('action' => 'edit', $bankMaster['BankMaster']['BankMasterNo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bank Master'), array('action' => 'delete', $bankMaster['BankMaster']['BankMasterNo']), null, __('Are you sure you want to delete # %s?', $bankMaster['BankMaster']['BankMasterNo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
