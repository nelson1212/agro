<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Producto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_cientifico');
		echo $this->Form->input('foto');
		echo $this->Form->input('lavado_id');
		echo $this->Form->input('embalaje_id');
		echo $this->Form->input('perido_cosecha');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('peso_gr');
		echo $this->Form->input('peso_lb');
		echo $this->Form->input('peso_kg');
		echo $this->Form->input('precio');
		echo $this->Form->input('cotactado');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('color_id');
		echo $this->Form->input('temperatura');
		echo $this->Form->input('altura_msnm');
		echo $this->Form->input('imagen');
		echo $this->Form->input('calidad_id');
		echo $this->Form->input('forma_id');
		echo $this->Form->input('firmeza_id');
		echo $this->Form->input('presentacion_id');
		echo $this->Form->input('brillo_id');
		echo $this->Form->input('sanidad_id');
		echo $this->Form->input('madurez_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lavados'), array('controller' => 'lavados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lavado'), array('controller' => 'lavados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Embalajes'), array('controller' => 'embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Embalaje'), array('controller' => 'embalajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calidads'), array('controller' => 'calidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calidad'), array('controller' => 'calidads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formas'), array('controller' => 'formas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma'), array('controller' => 'formas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmezas'), array('controller' => 'firmezas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmeza'), array('controller' => 'firmezas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentacions'), array('controller' => 'presentacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentacion'), array('controller' => 'presentacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brillos'), array('controller' => 'brillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brillo'), array('controller' => 'brillos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sanidads'), array('controller' => 'sanidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sanidad'), array('controller' => 'sanidads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Madurezs'), array('controller' => 'madurezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Madurez'), array('controller' => 'madurezs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interaccions'), array('controller' => 'interaccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interaccion'), array('controller' => 'interaccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nombres Comuns'), array('controller' => 'nombres_comuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nombres Comun'), array('controller' => 'nombres_comuns', 'action' => 'add')); ?> </li>
	</ul>
</div>
