<div class="categoriaNovedads view">
<h2><?php echo __('Categoria Novedad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaNovedad['CategoriaNovedad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoriaNovedad['CategoriaNovedad']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria Novedad'), array('action' => 'edit', $categoriaNovedad['CategoriaNovedad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria Novedad'), array('action' => 'delete', $categoriaNovedad['CategoriaNovedad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $categoriaNovedad['CategoriaNovedad']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Novedads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Novedad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Novedads'), array('controller' => 'novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Novedad'), array('controller' => 'novedads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Novedads'); ?></h3>
	<?php if (!empty($categoriaNovedad['Novedad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Categoria Novedad Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoriaNovedad['Novedad'] as $novedad): ?>
		<tr>
			<td><?php echo $novedad['id']; ?></td>
			<td><?php echo $novedad['titulo']; ?></td>
			<td><?php echo $novedad['texto']; ?></td>
			<td><?php echo $novedad['user_id']; ?></td>
			<td><?php echo $novedad['foto']; ?></td>
			<td><?php echo $novedad['categoria_novedad_id']; ?></td>
			<td><?php echo $novedad['created']; ?></td>
			<td><?php echo $novedad['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'novedads', 'action' => 'view', $novedad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'novedads', 'action' => 'edit', $novedad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'novedads', 'action' => 'delete', $novedad['id']), array('confirm' => __('Are you sure you want to delete # %s?', $novedad['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Novedad'), array('controller' => 'novedads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
