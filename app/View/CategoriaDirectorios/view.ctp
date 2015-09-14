<div class="categoriaDirectorios view">
<h2><?php echo __('Categoria Directorio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaDirectorio['CategoriaDirectorio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoriaDirectorio['CategoriaDirectorio']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria Directorio'), array('action' => 'edit', $categoriaDirectorio['CategoriaDirectorio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria Directorio'), array('action' => 'delete', $categoriaDirectorio['CategoriaDirectorio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $categoriaDirectorio['CategoriaDirectorio']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Directorios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Directorio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Directorios'); ?></h3>
	<?php if (!empty($categoriaDirectorio['Directorio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Categoria Directorio Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoriaDirectorio['Directorio'] as $directorio): ?>
		<tr>
			<td><?php echo $directorio['id']; ?></td>
			<td><?php echo $directorio['titulo']; ?></td>
			<td><?php echo $directorio['descripcion']; ?></td>
			<td><?php echo $directorio['telefono']; ?></td>
			<td><?php echo $directorio['email']; ?></td>
			<td><?php echo $directorio['direccion']; ?></td>
			<td><?php echo $directorio['categoria_directorio_id']; ?></td>
			<td><?php echo $directorio['created']; ?></td>
			<td><?php echo $directorio['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'directorios', 'action' => 'view', $directorio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'directorios', 'action' => 'edit', $directorio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'directorios', 'action' => 'delete', $directorio['id']), array('confirm' => __('Are you sure you want to delete # %s?', $directorio['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
