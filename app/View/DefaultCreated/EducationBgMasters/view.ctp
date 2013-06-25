<div class="educationBgMasters view">
<h2><?php  echo __('Education Bg Master'); ?></h2>
	<dl>
		<dt><?php echo __('EduBgCD'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['EduBgCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EduBgName'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['EduBgName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EduBgShortName'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['EduBgShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($educationBgMaster['EducationBgMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Education Bg Master'), array('action' => 'edit', $educationBgMaster['EducationBgMaster']['EduBgCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Education Bg Master'), array('action' => 'delete', $educationBgMaster['EducationBgMaster']['EduBgCD']), null, __('Are you sure you want to delete # %s?', $educationBgMaster['EducationBgMaster']['EduBgCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Bg Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Bg Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
