<div class="spRiseRateMasters view">
<h2><?php  echo __('Sp Rise Rate Master'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DivMark'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['DivMark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['Rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['update_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latest Data Flg'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['latest_data_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Key'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['last_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($spRiseRateMaster['SpRiseRateMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sp Rise Rate Master'), array('action' => 'edit', $spRiseRateMaster['SpRiseRateMaster']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sp Rise Rate Master'), array('action' => 'delete', $spRiseRateMaster['SpRiseRateMaster']['ID']), null, __('Are you sure you want to delete # %s?', $spRiseRateMaster['SpRiseRateMaster']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sp Rise Rate Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sp Rise Rate Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
