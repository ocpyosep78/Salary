<div class="ctMenuChohyos view">
<h2><?php  echo __('Ct Menu Chohyo'); ?></h2>
	<dl>
		<dt><?php echo __('MenuPrintID'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['MenuPrintID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AccessFlg'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['AccessFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OldNameFlg'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['OldNameFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PopularNameFlg'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['PopularNameFlg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($ctMenuChohyo['CtMenuChohyo']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ct Menu Chohyo'), array('action' => 'edit', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ct Menu Chohyo'), array('action' => 'delete', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID']), null, __('Are you sure you want to delete # %s?', $ctMenuChohyo['CtMenuChohyo']['MenuPrintID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ct Menu Chohyos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ct Menu Chohyo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
