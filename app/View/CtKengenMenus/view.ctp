<div class="ctKengenMenus view">
<h2><?php  echo __('Ct Kengen Menu'); ?></h2>
	<dl>
		<dt><?php echo __('CompetenceCD'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['CompetenceCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MenuPrintID'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['MenuPrintID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($ctKengenMenu['CtKengenMenu']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ct Kengen Menu'), array('action' => 'edit', $ctKengenMenu['CtKengenMenu']['CompetenceCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ct Kengen Menu'), array('action' => 'delete', $ctKengenMenu['CtKengenMenu']['CompetenceCD']), null, __('Are you sure you want to delete # %s?', $ctKengenMenu['CtKengenMenu']['CompetenceCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ct Kengen Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ct Kengen Menu'), array('action' => 'add')); ?> </li>
	</ul>
</div>
