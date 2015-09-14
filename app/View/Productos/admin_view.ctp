<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cientifico'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre_cientifico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lavado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Lavado']['nombre'], array('controller' => 'lavados', 'action' => 'view', $producto['Lavado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Embalaje']['nombre'], array('controller' => 'embalajes', 'action' => 'view', $producto['Embalaje']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perido Cosecha'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['perido_cosecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $producto['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso Gr'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['peso_gr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso Lb'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['peso_lb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso Kg'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['peso_kg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cotactado'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['cotactado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Color']['nombre'], array('controller' => 'colors', 'action' => 'view', $producto['Color']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temperatura'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['temperatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Altura Msnm'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['altura_msnm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['imagen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Calidad']['nombre'], array('controller' => 'calidads', 'action' => 'view', $producto['Calidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Forma']['nombre'], array('controller' => 'formas', 'action' => 'view', $producto['Forma']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firmeza'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Firmeza']['nombre'], array('controller' => 'firmezas', 'action' => 'view', $producto['Firmeza']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Presentacion']['nombre'], array('controller' => 'presentacions', 'action' => 'view', $producto['Presentacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brillo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Brillo']['nombre'], array('controller' => 'brillos', 'action' => 'view', $producto['Brillo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sanidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Sanidad']['nombre'], array('controller' => 'sanidads', 'action' => 'view', $producto['Sanidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Madurez'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Madurez']['nombre'], array('controller' => 'madurezs', 'action' => 'view', $producto['Madurez']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Interaccions'); ?></h3>
	<?php if (!empty($producto['Interaccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mensaje'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Interaccion'] as $interaccion): ?>
		<tr>
			<td><?php echo $interaccion['id']; ?></td>
			<td><?php echo $interaccion['mensaje']; ?></td>
			<td><?php echo $interaccion['user_id']; ?></td>
			<td><?php echo $interaccion['producto_id']; ?></td>
			<td><?php echo $interaccion['created']; ?></td>
			<td><?php echo $interaccion['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interaccions', 'action' => 'view', $interaccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interaccions', 'action' => 'edit', $interaccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interaccions', 'action' => 'delete', $interaccion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $interaccion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interaccion'), array('controller' => 'interaccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Nombres Comuns'); ?></h3>
	<?php if (!empty($producto['NombresComun'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['NombresComun'] as $nombresComun): ?>
		<tr>
			<td><?php echo $nombresComun['id']; ?></td>
			<td><?php echo $nombresComun['nombre']; ?></td>
			<td><?php echo $nombresComun['producto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nombres_comuns', 'action' => 'view', $nombresComun['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nombres_comuns', 'action' => 'edit', $nombresComun['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nombres_comuns', 'action' => 'delete', $nombresComun['id']), array('confirm' => __('Are you sure you want to delete # %s?', $nombresComun['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nombres Comun'), array('controller' => 'nombres_comuns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
