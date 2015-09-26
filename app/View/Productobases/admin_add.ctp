<div class="productobases form">
<?php echo $this->Form->create('Productobase'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Productobase'); ?></legend>
	<?php
		echo $this->Form->input('nombre_cientifico');
		echo $this->Form->input('nombre_comun');
		echo $this->Form->input('variedad_id');
		echo $this->Form->input('foto_por_defecto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productobases'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Variedads'), array('controller' => 'variedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variedad'), array('controller' => 'variedads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
