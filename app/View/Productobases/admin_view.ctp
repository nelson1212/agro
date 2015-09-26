<div class="productobases view">
<h2><?php echo __('Productobase'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productobase['Productobase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cientifico'); ?></dt>
		<dd>
			<?php echo h($productobase['Productobase']['nombre_cientifico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Comun'); ?></dt>
		<dd>
			<?php echo h($productobase['Productobase']['nombre_comun']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variedad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productobase['Variedad']['nombre'], array('controller' => 'variedads', 'action' => 'view', $productobase['Variedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Por Defecto'); ?></dt>
		<dd>
			<?php echo h($productobase['Productobase']['foto_por_defecto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Productobase'), array('action' => 'edit', $productobase['Productobase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Productobase'), array('action' => 'delete', $productobase['Productobase']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productobase['Productobase']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Productobases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productobase'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variedads'), array('controller' => 'variedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variedad'), array('controller' => 'variedads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($productobase['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Productobase Id'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Lavado Id'); ?></th>
		<th><?php echo __('Embalaje Id'); ?></th>
		<th><?php echo __('Fecha Cosecha'); ?></th>
		<th><?php echo __('Fecha Siembra'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Peso Gr'); ?></th>
		<th><?php echo __('Peso Lb'); ?></th>
		<th><?php echo __('Peso Kg'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Color Id'); ?></th>
		<th><?php echo __('Temperatura'); ?></th>
		<th><?php echo __('Altura Msnm'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Calidad Id'); ?></th>
		<th><?php echo __('Forma Id'); ?></th>
		<th><?php echo __('Firmeza Id'); ?></th>
		<th><?php echo __('Presentacion Id'); ?></th>
		<th><?php echo __('Brillo Id'); ?></th>
		<th><?php echo __('Sanidad Id'); ?></th>
		<th><?php echo __('Madurez Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productobase['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['productobase_id']; ?></td>
			<td><?php echo $producto['foto']; ?></td>
			<td><?php echo $producto['lavado_id']; ?></td>
			<td><?php echo $producto['embalaje_id']; ?></td>
			<td><?php echo $producto['fecha_cosecha']; ?></td>
			<td><?php echo $producto['fecha_siembra']; ?></td>
			<td><?php echo $producto['estado_id']; ?></td>
			<td><?php echo $producto['peso_gr']; ?></td>
			<td><?php echo $producto['peso_lb']; ?></td>
			<td><?php echo $producto['peso_kg']; ?></td>
			<td><?php echo $producto['precio']; ?></td>
			<td><?php echo $producto['cantidad']; ?></td>
			<td><?php echo $producto['color_id']; ?></td>
			<td><?php echo $producto['temperatura']; ?></td>
			<td><?php echo $producto['altura_msnm']; ?></td>
			<td><?php echo $producto['imagen']; ?></td>
			<td><?php echo $producto['calidad_id']; ?></td>
			<td><?php echo $producto['forma_id']; ?></td>
			<td><?php echo $producto['firmeza_id']; ?></td>
			<td><?php echo $producto['presentacion_id']; ?></td>
			<td><?php echo $producto['brillo_id']; ?></td>
			<td><?php echo $producto['sanidad_id']; ?></td>
			<td><?php echo $producto['madurez_id']; ?></td>
			<td><?php echo $producto['created']; ?></td>
			<td><?php echo $producto['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
