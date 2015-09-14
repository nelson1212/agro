<div class="nombresComuns view">
<h2><?php echo __('Nombres Comun'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nombresComun['NombresComun']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($nombresComun['NombresComun']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nombresComun['Producto']['nombre_cientifico'], array('controller' => 'productos', 'action' => 'view', $nombresComun['Producto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nombres Comun'), array('action' => 'edit', $nombresComun['NombresComun']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nombres Comun'), array('action' => 'delete', $nombresComun['NombresComun']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $nombresComun['NombresComun']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Nombres Comuns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nombres Comun'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
