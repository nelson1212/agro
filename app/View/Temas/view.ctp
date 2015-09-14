<div class="temas view">
<h2><?php echo __('Tema'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tema['User']['nombres'], array('controller' => 'users', 'action' => 'view', $tema['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenido'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['contenido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tema'), array('action' => 'edit', $tema['Tema']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tema'), array('action' => 'delete', $tema['Tema']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tema['Tema']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($tema['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tema Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tema['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['tema_id']; ?></td>
			<td><?php echo $comentario['user_id']; ?></td>
			<td><?php echo $comentario['comentario']; ?></td>
			<td><?php echo $comentario['created']; ?></td>
			<td><?php echo $comentario['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comentario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
