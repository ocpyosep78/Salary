<div class="csvTests view">
<h2><?php  echo __('Csv Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SexDiv'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['SexDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpNo'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['EmpNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DepCD'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['DepCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobDutyCD'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['JobDutyCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LocalCD'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['LocalCD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpDiv'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['EmpDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayerDiv'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['PayerDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CouponPaidDiv'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['CouponPaidDiv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaidCouponNum'); ?></dt>
		<dd>
			<?php echo h($csvTest['CsvTest']['PaidCouponNum']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Csv Test'), array('action' => 'edit', $csvTest['CsvTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Csv Test'), array('action' => 'delete', $csvTest['CsvTest']['id']), null, __('Are you sure you want to delete # %s?', $csvTest['CsvTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Csv Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Csv Test'), array('action' => 'add')); ?> </li>
	</ul>
</div>
