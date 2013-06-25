<div class="nationalityMasters view">
<h2><?php  echo __('Nationality Master'); ?></h2>
	<dl>
		<dt><?php echo __('NationalityCD'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['NationalityCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NationalityName'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['NationalityName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NationalityShortName'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['NationalityShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($nationalityMaster['NationalityMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nationality Master'), array('action' => 'edit', $nationalityMaster['NationalityMaster']['NationalityCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nationality Master'), array('action' => 'delete', $nationalityMaster['NationalityMaster']['NationalityCD']), null, __('Are you sure you want to delete # %s?', $nationalityMaster['NationalityMaster']['NationalityCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationality Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
