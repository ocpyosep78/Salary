<div class="catJobTypeDutyRecDivCbMasters view">
<h2><?php  echo __('Cat Job Type Duty Rec Div Cb Master'); ?></h2>
	<dl>
		<dt><?php echo __('CatJobTypeDutyRecDivCbMasterID'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['CatJobTypeDutyRecDivCbMasterID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitDivCD'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['RecruitDivCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RecruitDiv'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['RecruitDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTypeCD'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['JobTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTypeName'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['JobTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobDutyCD'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['JobDutyCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobCategoryName'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['JobCategoryName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExamTypeCD'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['ExamTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExamTypeName'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['ExamTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDate'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['RegDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegisteredBy'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['RegisteredBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegPgID'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['RegPgID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateDate'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['UpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdateBy'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['UpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpdatePgmID'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['UpdatePgmID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DeleteFlg'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['DeleteFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VersionNo'); ?></dt>
		<dd>
			<?php echo h($catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['VersionNo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cat Job Type Duty Rec Div Cb Master'), array('action' => 'edit', $catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['CatJobTypeDutyRecDivCbMasterID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cat Job Type Duty Rec Div Cb Master'), array('action' => 'delete', $catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['CatJobTypeDutyRecDivCbMasterID']), null, __('Are you sure you want to delete # %s?', $catJobTypeDutyRecDivCbMaster['CatJobTypeDutyRecDivCbMaster']['CatJobTypeDutyRecDivCbMasterID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cat Job Type Duty Rec Div Cb Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat Job Type Duty Rec Div Cb Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
