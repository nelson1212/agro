<div class="foros view">
<h2><?php echo __('Foro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foro['Foro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($foro['Foro']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($foro['Foro']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foro['User']['nombres'], array('controller' => 'users', 'action' => 'view', $foro['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($foro['Foro']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foro['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $foro['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($foro['Foro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($foro['Foro']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foro'), array('action' => 'edit', $foro['Foro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foro'), array('action' => 'delete', $foro['Foro']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $foro['Foro']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Foros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foro Temas'), array('controller' => 'foro_temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro Tema'), array('controller' => 'foro_temas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foro Temas'); ?></h3>
	<?php if (!empty($foro['ForoTema'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tema Id'); ?></th>
		<th><?php echo __('Foro Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foro['ForoTema'] as $foroTema): ?>
		<tr>
			<td><?php echo $foroTema['id']; ?></td>
			<td><?php echo $foroTema['tema_id']; ?></td>
			<td><?php echo $foroTema['foro_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foro_temas', 'action' => 'view', $foroTema['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foro_temas', 'action' => 'edit', $foroTema['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foro_temas', 'action' => 'delete', $foroTema['id']), array('confirm' => __('Are you sure you want to delete # %s?', $foroTema['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foro Tema'), array('controller' => 'foro_temas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
