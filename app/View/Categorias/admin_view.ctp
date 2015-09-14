<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $categoria['Categoria']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foros'), array('controller' => 'foros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foros'); ?></h3>
	<?php if (!empty($categoria['Foro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Foro'] as $foro): ?>
		<tr>
			<td><?php echo $foro['id']; ?></td>
			<td><?php echo $foro['nombre']; ?></td>
			<td><?php echo $foro['descripcion']; ?></td>
			<td><?php echo $foro['user_id']; ?></td>
			<td><?php echo $foro['estado']; ?></td>
			<td><?php echo $foro['categoria_id']; ?></td>
			<td><?php echo $foro['created']; ?></td>
			<td><?php echo $foro['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foros', 'action' => 'view', $foro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foros', 'action' => 'edit', $foro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foros', 'action' => 'delete', $foro['id']), array('confirm' => __('Are you sure you want to delete # %s?', $foro['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
