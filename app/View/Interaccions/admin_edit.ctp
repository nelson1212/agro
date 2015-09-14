<div class="interaccions form">
<?php echo $this->Form->create('Interaccion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Interaccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mensaje');
		echo $this->Form->input('user_id');
		echo $this->Form->input('producto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Interaccion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Interaccion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Interaccions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
