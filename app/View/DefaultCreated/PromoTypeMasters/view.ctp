<div class="promoTypeMasters view">
<h2><?php  echo __('Promo Type Master'); ?></h2>
	<dl>
		<dt><?php echo __('PromoTypeCD'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['PromoTypeCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromoTypeName'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['PromoTypeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromoShortName'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['PromoShortName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['Remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['registered_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered By'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['registered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated By'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['updated_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expired Date'); ?></dt>
		<dd>
			<?php echo h($promoTypeMaster['PromoTypeMaster']['expired_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promo Type Master'), array('action' => 'edit', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Promo Type Master'), array('action' => 'delete', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD']), null, __('Are you sure you want to delete # %s?', $promoTypeMaster['PromoTypeMaster']['PromoTypeCD'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Promo Type Masters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promo Type Master'), array('action' => 'add')); ?> </li>
	</ul>
</div>
