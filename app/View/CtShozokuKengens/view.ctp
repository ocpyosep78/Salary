<div class="ctShozokuKengens view">
<h2><?php  echo __('Ct Shozoku Kengen'); ?></h2>
	<dl>
		<dt><?php echo __('DepCompetenceID'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['DepCompetenceID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DepCD'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['DepCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CompetenceCD'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['CompetenceCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpDiv'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['EmpDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($ctShozokuKengen['CtShozokuKengen']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ct Shozoku Kengen'), array('action' => 'edit', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ct Shozoku Kengen'), array('action' => 'delete', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID']), null, __('Are you sure you want to delete # %s?', $ctShozokuKengen['CtShozokuKengen']['DepCompetenceID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ct Shozoku Kengens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ct Shozoku Kengen'), array('action' => 'add')); ?> </li>
	</ul>
</div>
