<div class="firmezas view">
<h2><?php echo __('Firmeza'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($firmeza['Firmeza']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($firmeza['Firmeza']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Firmeza'), array('action' => 'edit', $firmeza['Firmeza']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Firmeza'), array('action' => 'delete', $firmeza['Firmeza']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $firmeza['Firmeza']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmezas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmeza'), array('action' => 'add')); ?> </li>
	</ul>
</div>
