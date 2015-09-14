<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cientifico'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('lavado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('perido_cosecha'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('peso_gr'); ?></th>
			<th><?php echo $this->Paginator->sort('peso_lb'); ?></th>
			<th><?php echo $this->Paginator->sort('peso_kg'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('cotactado'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('color_id'); ?></th>
			<th><?php echo $this->Paginator->sort('temperatura'); ?></th>
			<th><?php echo $this->Paginator->sort('altura_msnm'); ?></th>
			<th><?php echo $this->Paginator->sort('imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('calidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('firmeza_id'); ?></th>
			<th><?php echo $this->Paginator->sort('presentacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('brillo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sanidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('madurez_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['nombre_cientifico']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['foto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Lavado']['nombre'], array('controller' => 'lavados', 'action' => 'view', $producto['Lavado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Embalaje']['nombre'], array('controller' => 'embalajes', 'action' => 'view', $producto['Embalaje']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['perido_cosecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $producto['Estado']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['peso_gr']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['peso_lb']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['peso_kg']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['cotactado']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['cantidad']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Color']['nombre'], array('controller' => 'colors', 'action' => 'view', $producto['Color']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['temperatura']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['altura_msnm']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['imagen']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Calidad']['nombre'], array('controller' => 'calidads', 'action' => 'view', $producto['Calidad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Forma']['nombre'], array('controller' => 'formas', 'action' => 'view', $producto['Forma']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Firmeza']['nombre'], array('controller' => 'firmezas', 'action' => 'view', $producto['Firmeza']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Presentacion']['nombre'], array('controller' => 'presentacions', 'action' => 'view', $producto['Presentacion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Brillo']['nombre'], array('controller' => 'brillos', 'action' => 'view', $producto['Brillo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Sanidad']['nombre'], array('controller' => 'sanidads', 'action' => 'view', $producto['Sanidad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Madurez']['nombre'], array('controller' => 'madurezs', 'action' => 'view', $producto['Madurez']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['created']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?></li>
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
