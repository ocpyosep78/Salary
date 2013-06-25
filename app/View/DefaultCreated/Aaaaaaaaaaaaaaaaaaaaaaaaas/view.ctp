<div class="aaaaaaaaaaaaaaaaaaaaaaaaas view">
<h2><?php  echo __('Aaaaaaaaaaaaaaaaaaaaaaaaa'); ?></h2>
	<dl>
		<dt><?php echo __('EmpBasicInformationID'); ?></dt>
		<dd>
			<?php echo h($aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['EmpBasicInformationID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpNo'); ?></dt>
		<dd>
			<?php echo h($aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['EmpNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AssignOrgCD'); ?></dt>
		<dd>
			<?php echo h($aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['AssignOrgCD']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aaaaaaaaaaaaaaaaaaaaaaaaa'), array('action' => 'edit', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aaaaaaaaaaaaaaaaaaaaaaaaa'), array('action' => 'delete', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id']), null, __('Are you sure you want to delete # %s?', $aaaaaaaaaaaaaaaaaaaaaaaaa['Aaaaaaaaaaaaaaaaaaaaaaaaa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aaaaaaaaaaaaaaaaaaaaaaaaas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aaaaaaaaaaaaaaaaaaaaaaaaa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
