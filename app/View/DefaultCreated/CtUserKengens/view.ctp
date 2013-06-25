<div class="ctUserKengens view">
<h2><?php  echo __('Ct User Kengen'); ?></h2>
	<dl>
		<dt><?php echo __('EmpCompetenceID'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['EmpCompetenceID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpNo'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['EmpNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CompetenceCD'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['CompetenceCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($ctUserKengen['CtUserKengen']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ct User Kengen'), array('action' => 'edit', $ctUserKengen['CtUserKengen']['EmpCompetenceID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ct User Kengen'), array('action' => 'delete', $ctUserKengen['CtUserKengen']['EmpCompetenceID']), null, __('Are you sure you want to delete # %s?', $ctUserKengen['CtUserKengen']['EmpCompetenceID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ct User Kengens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ct User Kengen'), array('action' => 'add')); ?> </li>
	</ul>
</div>
