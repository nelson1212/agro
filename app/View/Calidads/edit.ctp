<div class="calidads form">
<?php echo $this->Form->create('Calidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Calidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Calidad.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Calidad.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Calidads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
